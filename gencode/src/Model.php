<?php

namespace Arimac\Sigfox\GenCode;

use Arimac\Sigfox\GenCode\Config\EnumFields;
use Arimac\Sigfox\GenCode\Config\ForceTraits;
use Arimac\Sigfox\GenCode\Config\TypeAlias;
use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\NullableType;
use PhpParser\Node\Stmt\Return_;

class Model extends Class_
{
    protected array $properties = [];

    public function __construct(string $namespaceName, string $name, ?string $docComment = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
        $this->name = $name;
        if (ForceTraits::exist($this->getName())) {
            $this->class = $this->factory->trait($name);
        } else {
            $this->class = $this->factory->class($name);
        }
        if ($docComment) {
            $this->class->setDocComment($docComment);
        }
    }

    protected function toSerialize(string $type)
    {
        $isArray = substr($type, strlen($type) - 2) === "[]";
        $isGeneric = substr($type, strlen($type) - 1) === ">";
        // has a namespace
        if ($isArray) {
            $itemType = substr($type, 0, strlen($type) - 2);
            $itemType = $this->toSerialize($itemType);
            $this->useType("Arimac\\Sigfox\\Serializer\\ArraySerializer");

            return $this->factory->new(
                "ArraySerializer",
                [
                    $itemType
                ]
            );
        } else if ($isGeneric) {
            $slices = explode("<", $type, 2);
            $parentType = $slices[0];
            $childType = substr($slices[1], 0, strlen($slices[1]) - 1);

            $parentType = $this->useType($parentType);
            $parentType = $this->factory->classConstFetch($parentType, "class");
            $childType = $this->toSerialize($childType);

            $this->useType("Arimac\\Sigfox\\Serializer\\GenericSerializer");
            return $this->factory->new(
                "GenericSerializer",
                [
                    $parentType,
                    $childType
                ]
            );
        } else {
            $slices = explode("\\", $type);
            if (count($slices) > 1) {
                $className = $this->useType($type);

                $this->useType("Arimac\\Sigfox\\Serializer\\ClassSerializer");
                return $this->factory->new(
                    "ClassSerializer",
                    [
                        $this->factory->classConstFetch($className, "class")
                    ]
                );
            } else {

                $this->useType("Arimac\\Sigfox\\Serializer\\PrimitiveSerializer");

                return $this->factory->new(
                    "PrimitiveSerializer",
                    [
                        $this->factory->val($type)
                    ]
                );
            }
        }
    }

    protected function addExtendedArrayPropertyMethod(
        array $items,
        array $extends,
        string $methodName,
        string $variableName,
        ?string $docComment = null
    ) {
        $thisMethodName = $methodName;
        if (ForceTraits::exist($this->getName())) {
            $thisMethodName .= $this->name;
        }

        $stmts = [new Assign(new Variable($variableName), $this->factory->val($items))];

        if (count($extends)) {
            foreach ($extends as $extend) {
                $extend = Helper::defToName($extend);
                if (ForceTraits::exist("Arimac\\Sigfox\\Model\\".$extend)) {
                    $stmts[] = new Assign(
                        new Variable($variableName),
                        $this->factory->funcCall(
                            "array_merge",
                            [
                                new Variable($variableName),
                                $this->factory->methodCall(
                                    new Variable("this"),
                                    $methodName . $extend
                                )
                            ]
                        )
                    );
                } else {
                    $stmts[] = new Assign(
                        new Variable($variableName),
                        $this->factory->funcCall(
                            "array_merge",
                            [
                                new Variable($variableName),
                                $this->factory->staticCall("parent", $methodName)
                            ]
                        )
                    );
                }
            }
        }

        $stmts[] = new Return_($this->factory->var($variableName));

        $this->addMethod(
            $thisMethodName,
            [],
            $stmts,
            "array",
            $docComment
        );
    }

    public function setSerialize(array $serialize, array $extends)
    {
        $serializers = [];
        foreach ($serialize as $propertyName => $type) {
            $serializers[$propertyName] = $this->toSerialize($type);
        }
        $this->addExtendedArrayPropertyMethod(
            $serializers,
            $extends,
            "getSerializeMetaData",
            "serializers",
            Helper::normalizeDocComment([["internal", null], ["inheritdoc", null]])
        );
    }

    public function setValidations(array $validations, array $extends)
    {
        $validationAst = [];
        foreach ($validations as $propertyName => $rules) {
            $validationAst[$propertyName] = [];
            foreach ($rules as $rule) {
                $name  = array_shift($rule);
                switch ($name) {
                    case "required":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\Required");
                        $validationAst[$propertyName][] = $this->factory->new($className);
                        break;
                    case "min":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\Min");
                        $validationAst[$propertyName][] = $this->factory->new($className, [$this->factory->val($rule[0])]);
                        break;
                    case "max":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\Max");
                        $validationAst[$propertyName][] = $this->factory->new($className, [$this->factory->val($rule[0])]);
                        break;
                    case "min-length":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\MinLength");
                        $validationAst[$propertyName][] = $this->factory->new($className, [$this->factory->val($rule[0])]);
                        break;
                    case "max-length":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\MaxLength");
                        $validationAst[$propertyName][] = $this->factory->new($className, [$this->factory->val($rule[0])]);
                        break;
                    case "one-of":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\OneOf");
                        $validationAst[$propertyName][] = $this->factory->new($className, [$this->factory->val($rule)]);
                        break;
                    case "child":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\Child");
                        $validationAst[$propertyName][] = $this->factory->new($className);
                        break;
                    case "child-set":
                        $className = $this->useType("Arimac\\Sigfox\\Validator\\Rules\\ChildSet");
                        $validationAst[$propertyName][] = $this->factory->new($className);
                        break;
                }
            }
        }

        $this->addExtendedArrayPropertyMethod(
            $validationAst,
            $extends,
            "getValidationMetaData",
            "rules",
            Helper::normalizeDocComment([["internal", null], ["inheritdoc", null]])
        );
    }

    public function setProperty(string $propertyName, string $type, bool $required, $description)
    {
        $this->properties[$propertyName] = [$type, $required, $description];
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function getName(): string {
        return $this->getNamespace()."\\".$this->getClassName();
    }

    public function addSetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        $assignment = new Assign(new Variable("this->$propertyName"), new Variable("$propertyName"));
        $ret = new Return_(new Variable("this"));

        $param = $this->factory->param($propertyName);
        $param->setType(new NullableType($type));

        $this->addMethod("set" . ucfirst($propertyName), [$param], [$assignment, $ret], null, $docComment);
    }

    public function addGetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        $ret = new Return_(new Variable("this->$propertyName"));
        $this->addMethod("get" . ucfirst($propertyName), [], [$ret], new NullableType($type), $docComment);
    }

    public function extend(string $name): bool
    {
        if (ForceTraits::exist($name)) {
            $name = $this->useType($name);
            $useTrait = $this->factory->useTrait($name);
            $this->class->addStmt($useTrait);
            return false;
        } else {
            if (!ForceTraits::exist($this->getName())) {
                $name = $this->useType($name);
                $this->class->extend($name);
            }
            return true;
        }
    }

    public function addProperty(string $name, string $type, ?string $docComment = null, $value = null, bool $nullable=true)
    {
        parent::addProperty($name, $type, $docComment, $this->factory->val($value), $nullable);
    }

    protected static function getValidations(array $definition, $required = false): array
    {
        $validations = [];
        if ((isset($definition["required"]) && $definition["required"]) || $required) {
            $validations[] = ["required"];
        }
        if (isset($definition["maximum"])) {
            $validations[] = ["max", $definition["maximum"]];
        }
        if (isset($definition["minimum"])) {
            $validations[] = ["min", $definition["minimum"]];
        }

        if (isset($definition["maxLength"])) {
            $validations[] = ["max-length", $definition["maxLength"]];
        }
        if (isset($definition["minLength"])) {
            $validations[] = ["min-length", $definition["minLength"]];
        }
        if (isset($definition["enum"])) {
            $rule = $definition["enum"];
            array_unshift($rule, "one-of");
            $validations[] = $rule;
        }
        return $validations;
    }

    public static function fromArray(string $name, array $definition)
    {
        $slices = explode("\\", $name);
        $className = array_pop($slices);
        $namespace = implode("\\", $slices);

        $properties = [];
        $extends = [];
        $extendable = false;

        if (isset($definition["type"]) && !isset($definition["allOf"])) {
            switch ($definition["type"]) {
                case "object":
                    $properties = $definition["properties"];
                    break;
                case "array":
                    if (isset($definition["items"])) {
                        $item = static::fromArray($name . "Item", $definition["items"]);
                        if (is_object($item)) {
                            $item = $item->getNamespace() . "\\" . $item->getClassName();
                        }
                        return $item . "[]";
                    }
                    return "array";
                case "string":
                    return "string";
                case "number":
                    if (isset($definition["format"]) && in_array($definition["format"], ["float", "double"])) {
                        return $definition["format"];
                    } else {
                        return "int";
                    }
                case "boolean":
                    return "bool";
                case "integer";
                    return "int";
            }
        } else if (isset($definition["allOf"])) {
            foreach ($definition["allOf"] as $allOf) {
                if (isset($allOf["type"])) {
                    if ($allOf["type"] === "object" && isset($allOf["properties"])) {
                        $properties = array_merge($properties, $allOf["properties"]);
                    } else if ($allOf["type"] === "object") {
                        $extendable = true;
                    }
                } else if (isset($allOf["\$ref"])) {
                    array_push($extends, $allOf["\$ref"]);
                }
            }
        } else if (isset($definition["\$ref"])) {
            $defClassName = Helper::defToName($definition["\$ref"]);
            $className =  "Arimac\\Sigfox\\Model\\" . $defClassName;
            return TypeAlias::getAlias($className)??$className;
        } else if (isset($definition["schema"]) && isset($definition["schema"]["\$ref"])) {
            $defClassName = Helper::defToName($definition["schema"]["\$ref"]);
            $className =  "Arimac\\Sigfox\\Model\\" . $defClassName;
            return TypeAlias::getAlias($className)??$className;
        }

        if (count($extends) === 1 && empty($properties) && !$extendable) {
            $newClassName = Helper::defToName($extends[0]);
            $alias =  "Arimac\\Sigfox\\Model\\" . $newClassName;
            TypeAlias::addAlias($name, $alias);
            return $alias;
        }

        if (empty($properties) && empty($extends)) {
            return "array";
        }

        $required = $definition["required"] ?? null;

        $defClass = new static(
            $namespace,
            $className,
            isset($definition["description"]) ? Helper::normalizeDocComment($definition["description"]) : null
        );

        $serialize = [];
        $validations = [];

        foreach ($properties as $propertyName => $property) {
            $type = Model::fromArray($name . "\\" . ucfirst($propertyName), $property);
            if (is_object($type)) {
                $type = $type->getNamespace() . "\\" . $type->getClassName();
            }
            $usedType = $defClass->useType($type);
            $phpType = Helper::toPHPValue($usedType);

            $validation = self::getValidations($property, $required ? in_array($propertyName, $required) : false);
            if (substr($type, 0, 14) === "Arimac\\Sigfox\\") {
                if ($phpType === "array") {
                    $validation[] = ["child-set"];
                } else {
                    $validation[] = ["child"];
                }
            }
            if (count($validation)) {
                $validations[$propertyName] = $validation;
            }

            $serialize[$propertyName] =  $type;

            $description = null;
            if (isset($property["description"])) {
                $description = $property["description"];
                $lines = explode("\n", $description);
                $fieldsLines = array_filter($lines, function ($line) {
                    return substr_count($line, "->");
                });
                if (count($fieldsLines)) {
                    $constants = EnumFields::getConstants($name, $propertyName, $description);
                    if ($constants) {
                        $constPrefix = Helper::camelToUnderscore($propertyName);
                        $description = isset($constants["comment"]) ? $constants["comment"] . "\n" : "";
                        $description .= "\n";
                        foreach ($constants as $constName => $attr) {
                            if ($constName !== "comment") {
                                $description .= "- {@see $className::$constPrefix" . "_$constName}\n";
                                $defClass->addConst(
                                    $constPrefix . "_" . $constName,
                                    $attr["value"],
                                    isset($attr["comment"]) ? Helper::normalizeDocComment($attr["comment"], 2) : null
                                );
                            }
                        }
                    }
                }
            }

            
            $defClass->setProperty($propertyName, $type, in_array("required", $validation), $description);

            $defClass->addProperty(
                $propertyName,
                $phpType,
                Helper::normalizeDocComment(
                    $description,
                    [["var", $usedType]],
                    2
                )
            );
            $defClass->addSetter(
                $phpType,
                $propertyName,
                Helper::normalizeDocComment(
                    "Setter for $propertyName",
                    [
                        ["param", $usedType, "\$$propertyName", $description],
                        ["return", "static", "To use in method chains"]
                    ],
                    2
                )
            );
            $defClass->addGetter(
                $phpType,
                $propertyName,
                Helper::normalizeDocComment(
                    "Getter for $propertyName",
                    [["return", $usedType, $description]],
                    2
                )
            );
        }

        $extended = false;
        foreach ($extends as $extend) {
            $className = Helper::defToName($extend);
            $extended = $defClass->extend("Arimac\\Sigfox\\Model\\" . $className) || $extended;
        }

        if (!$extended) {
            $defClass->extend("Arimac\\Sigfox\\Model");
        }

        if ($extendable) {
            $defClass->extend("Arimac\\Sigfox\\Extendable");
            $defClass->implement("Arimac\\Sigfox\\ExtendableImpl");
            $defClass->addProperty("extendable", "bool", null, true, false);
        }

        if (count($serialize) || count($extends)) {
            $defClass->setSerialize($serialize, $extends);
        }

        if (count($validations)) {
            $defClass->setValidations($validations, $extends);
        }

        $defClass->save();

        return $defClass;
    }
}
