<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Builder\Class_;
use PhpParser\BuilderFactory;
use PhpParser\BuilderHelpers;
use PhpParser\Node\Const_;
use PhpParser\Node\NullableType;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Class_ as StmtClass_;
use PhpParser\Node\Stmt\ClassConst;
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

    public function __construct(string $name, ?string $description = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespace = $this->factory->namespace("Arimac\Sigfox\Definition");
        $this->class = $this->factory->class($name);
        $this->name = $name;
        if ($description) {
            $this->class->setDocComment($this->formatDocComment($description));
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

    public function addPrimitiveTypeProperty(string $name, string $type, bool $required, ?string $message = null)
    {
        $property = $this->factory->property($name);
        $property->setType($required ? new NullableType($type) : $type);
        if ($message) {
            $property->setDocComment($this->formatDocComment($message, $name));
        }
        $property->makeProtected();
        $this->class->addStmt($property);
    }

    protected function formatDocComment(string $message, ?string $propertyName = null): string
    {
        $lines = explode("\n", $message);
        if (trim(end($lines)) === "") {
            array_pop($lines);
        }

        if ($propertyName && count($lines) > 1) {
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
                    $constName = camelToUnderscore($propertyName) . "_" . $constName;

                    $const = new Const_($constName, new LNumber((int)$value));
                    $classConst = new ClassConst(
                        [$const],
                        StmtClass_::MODIFIER_PUBLIC,
                        ["comments" => [BuilderHelpers::normalizeDocComment("/** $description */")]]
                    );
                    $this->class->addStmt($classConst);

                    $lines[$key] = sprintf("- `%s::%s`", $this->name, $constName);
                }
            }
        }

        $formatted = implode("\n * ", $lines);
        return "/**\n * $formatted\n */";
    }
}
