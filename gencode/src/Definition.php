<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Builder\Class_;
use PhpParser\BuilderFactory;
use PhpParser\BuilderHelpers;
use PhpParser\Node\Const_;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\NullableType;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Class_ as StmtClass_;
use PhpParser\Node\Stmt\ClassConst;
use PhpParser\Node\Stmt\Return_;
use PhpParser\PrettyPrinter;

use function Arimac\Sigfox\GenCode\Utils\camelToUnderscore;

class Definition
{
    /** @var BuilderFactory **/
    protected $factory;

    /** @var Namespace_ **/
    protected $namespace;

    /** @var Class_ **/
    protected $class;

    protected $name;

    protected $forceTraits = ["BillableGroup", "CallbackEmail", "GroupCallbackEmail", "ProfileIds"];

    public function __construct(string $name, ?string $description = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespace = $this->factory->namespace("Arimac\Sigfox\Definition");
        if (in_array($name, $this->forceTraits)) {
            $this->class = $this->factory->trait($name);
        } else {
            $this->class = $this->factory->class($name);
        }
        $this->name = $name;
        if ($description) {
            $this->class->setDocComment($this->formatDocComment("class", $description));
        }
    }

    public function getClassName(): string
    {
        return $this->name;
    }

    public function getContents(): string
    {

        $this->namespace->addStmt($this->class);
        $node = $this->namespace->getNode();
        $stmts = array($node);
        $prettyPrinter = new PrettyPrinter\Standard();
        return $prettyPrinter->prettyPrintFile($stmts);
    }

    public function addProperty(string $name, string $type, bool $optional, ?string $message = null)
    {
        $property = $this->factory->property($name);
        $docType = $type;
        if (substr($type, strlen($type) - 2) == "[]") {
            $type = "array";
        }
        $property->setType($optional ? new NullableType($type) : $type);
        if ($message) {
            $property->setDocComment($this->formatDocComment("property", $message, $name, [["var", $docType]]));
        } else {
            $property->setDocComment("/** @var $docType */");
        }
        $property->makeProtected();
        $this->class->addStmt($property);

        // Setter
        $method = $this->factory->method("set" . ucfirst($name));
        $param = $this->factory->param($name);
        $param->setType($optional ? new NullableType($type) : $type);
        $method->addParam($param);
        if ($message) {
            $method->setDocComment($this->formatDocComment("setter", "@param $docType $name " . $message, $name));
        } else {
            $method->setDocComment("/**\n * @param $docType $name\n */");
        }
        $expression = new Assign(new Variable("this->$name"), new Variable("$name"));
        $method->addStmt($expression);
        $this->class->addStmt($method);

        // Getter
        $method = $this->factory->method("get" . ucfirst($name));
        $method->setReturnType($optional ? new NullableType($type) : $type);
        if ($message) {
            $method->setDocComment($this->formatDocComment("getter", "@return $docType " . $message, $name));
        } else {
            $method->setDocComment("/**\n * @return $docType $name\n */");
        }
        $expression = new Return_(new Variable("this->$name"));
        $method->addStmt($expression);
        $this->class->addStmt($method);
    }

    public function addUse($name)
    {
        $this->namespace->addStmt($this->factory->use("Arimac\Sigfox\Definition\\" . $name));
    }

    public function extend(string $name)
    {
        $this->addUse($name);
        if (in_array($name, $this->forceTraits)) {
            $this->class->addStmt($this->factory->useTrait($name));
        } else {
            $this->class->extend($name);
        }
    }

    protected function formatDocComment(
        string $type,
        string $message,
        ?string $name = null,
        $docCommentParams = []
    ): string {
        $lines = explode("\n", $message);
        if (trim(end($lines)) === "") {
            array_pop($lines);
        }

        if (in_array($type, ["setter", "getter", "property"]) && count($lines) > 1) {
            foreach ($lines as $key => $line) {
                $matched = preg_match("/^(-\s)?(\d+)\s->\s(.*?)$/", trim($line), $groups);
                if ($matched) {
                    $description = $groups[3];
                    $value = $groups[2];
                    if (preg_match("/^([A-Z_]+)\s([A-Za-z][a-z]+)(.*)/", $description, $groups)) {
                        $constName = $groups[1];
                    } else if (preg_match('/^(.*?)\(([A-Z][^\s\-]+)\)/', $description, $groups)) {
                        $constName =  $groups[1] . strtoupper($groups[2]);
                    } else if (substr($description, 0, 14) == "computed using") {
                        $constName = substr($description, 15);
                    } else {
                        $constName = $description;
                    }
                    $constName = strtoupper(str_replace(" ", "_", trim(preg_replace(
                        "/[^A-Za-z0-9\s\-_]/",
                        "",
                        preg_replace(
                            "/\((.*)\)/",
                            "",
                            $constName
                        )
                    ))));
                    $constName = camelToUnderscore($name) . "_" . $constName;

                    if ($type == "property") {
                        $const = new Const_($constName, new LNumber((int)$value));
                        $classConst = new ClassConst(
                            [$const],
                            StmtClass_::MODIFIER_PUBLIC,
                            ["comments" => [BuilderHelpers::normalizeDocComment("/** $description */")]]
                        );
                        $this->class->addStmt($classConst);
                    }

                    $lines[$key] = sprintf("- `%s::%s`", $this->name, $constName);
                }
            }
        }

        $formatted = implode("\n * ", $lines);
        $formatted = "/**\n * $formatted\n";
        if (count($docCommentParams) > 0) {
            $formatted .= " *\n";
            foreach ($docCommentParams as $comment) {
                $formatted .= " * @" . $comment[0] . " " . $comment[1] . "\n";
            }
        }

        return $formatted . " */";
    }
}
