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

use function Arimac\Sigfox\GenCode\Utils\defToName;
use function Arimac\Sigfox\GenCode\Utils\extractEnumFieldsFromDescription;

class Definition extends ClassExt
{
    protected $forceTraits = [
        "BillableGroup",
        "CallbackEmail",
        "GroupCallbackEmail",
        "ProfileIds",
        "SingleDeviceFields"
    ];

    public function __construct(string $namespaceName, string $name, ?string $description = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
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

    protected function setArrayProperty(string $propertyName, array $items)
    {
        $property = $this->factory->property($propertyName);
        $property->setDefault($items);
        $property->makeProtected();
        $this->class->addStmt($property);
    }

    public function setRequired(array $required)
    {
        $this->setArrayProperty("required", $required);
    }

    public function setObjects(array $objects)
    {
        $this->setArrayProperty("objects", $objects);
    }

    public function addProperty(string $name, string $type, ?string $message = null, bool $optional= true)
    {
        $property = $this->factory->property($name);
        $docType = $type;
        if (substr($type, strlen($type) - 2) == "[]") {
            $type = "array";
        }
        $property->setType($optional ? new NullableType($type) : $type);
        if ($optional) {
            $property->setDefault(null);
        }
        if ($message) {
            $property->setDocComment($this->formatDocComment("property", $message, [["var", $docType]], $name));
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
            $method->setDocComment($this->formatDocComment("setter", "@param $docType \$$name " . $message, [], $name));
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
            $method->setDocComment($this->formatDocComment("getter", "@return $docType " . $message, [], $name));
        } else {
            $method->setDocComment("/**\n * @return $docType $name\n */");
        }
        $expression = new Return_(new Variable("this->$name"));
        $method->addStmt($expression);
        $this->class->addStmt($method);
    }

    public static function fromArray($namespace, $name, array $definition): Definition
    {
        $defClass = new Definition($namespace, $name, $definition["description"] ?? null);
        addProperties($defClass, $definition);

        $extended = false;
        if (isset($definition["allOf"])) {
            foreach ($definition["allOf"] as $allOf) {
                if (isset($allOf["\$ref"])) {
                    $extended = true;
                    $defClass->extend("Arimac\\Sigfox\\Definition", defToName($allOf["\$ref"]));
                } else if (isset($allOf["type"]) && $allOf["type"] == "object") {
                    addProperties($defClass, $allOf);
                }
            }
        }
        if (!$extended && !in_array($name, $defClass->forceTraits)) {
            $defClass->extend("Arimac\\Sigfox", "Definition");
        }

        return $defClass;
    }

    protected function formatDocComment(
        string $type,
        string $message,
        $docCommentParams = [],
        ?string $name = null,
    ): string {
        $message = trim($message);

        if (in_array($type, ["setter", "getter", "property"]) && substr_count($message, "\n") > 0) {
            $enumFields = extractEnumFieldsFromDescription($this->getClassName(), $name, $message);
            if ($type == "property") {
                foreach ($enumFields as $constName => $valDoc) {
                    $const = new Const_($constName, new LNumber($valDoc[0]));
                    $description = $valDoc[1];
                    $classConst = new ClassConst(
                        [$const],
                        StmtClass_::MODIFIER_PUBLIC,
                        ["comments" => [BuilderHelpers::normalizeDocComment("/** $description */")]]
                    );
                    $this->class->addStmt($classConst);
                }
            }
        }
        $lines = explode("\n", $message);

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
