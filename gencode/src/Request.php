<?php

namespace Arimac\Sigfox\GenCode;

use Arimac\Sigfox\GenCode\Config\EnumFields;
use PhpParser\BuilderFactory;

class Request extends Definition
{
    protected $getter = false;

    protected $properties = [];

    public function __construct(string $namespaceName, string $name, ?string $docComment = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
        if (in_array($name, $this->forceTraits)) {
            $this->class = $this->factory->trait($name);
        } else {
            $this->class = $this->factory->class($name);
            $this->extend("Arimac\\Sigfox\\Request");
        }
        $this->name = $name;
        if ($docComment) {
            $this->class->setDocComment($docComment);
        }
    }

    public function setProperty(string $propertyName, string $type, bool $required, $description)
    {
        $this->properties[$propertyName] = [$type, $required, $description];
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setQuery(array $query)
    {
        $this->setArrayProperty("query", $query);
    }

    public function setBody(array $body)
    {
        $this->setArrayProperty("body", $body);
    }

    public static function fromArray(string $name, array $definition)
    {
        $slices = explode("\\", $name);
        $className = array_pop($slices);
        $namespace = implode("\\", $slices);

        if (isset($definition["parameters"])) {
            $body = [];
            $query = [];
            $properties = [];
            foreach ($definition["parameters"] as $parameter) {
                if ($parameter["in"] === "body" || $parameter["in"] === "query") {
                    $in = $parameter["in"];
                    array_push($$in, $parameter["name"]);
                    array_push($properties, $parameter);
                }
            }
            if (count($properties)) {
                $defClass = new static(
                    $namespace,
                    $className,
                    isset($definition["description"]) ? Helper::normalizeDocComment($definition["description"]) : null
                );

                $serialize = [];
                $validations = [];

                foreach ($properties as $property) {
                    $propertyName = $property["name"];
                    $type = Definition::fromArray($name . "\\" . ucfirst($propertyName), $property);
                    $usedType = $defClass->useType($type);
                    $phpType = Helper::toPHPValue($usedType);

                    $validation = self::getValidations($property);
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
                                ["return", "self", "To use in method chains"]
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

                if (count($serialize)) {
                    $defClass->setSerialize($serialize);
                }

                if (count($query)) {
                    $defClass->setQuery($query);
                }

                if (count($body)) {
                    $defClass->setBody($body);
                }

                if (count($validations)) {
                    $defClass->setValidations($validations);
                }

                $defClass->save();

                return $defClass;
            }
        }

        return null;
    }

    public function addGetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        if ($docComment) {
            $indent = strlen($docComment) - strlen(trim($docComment));
            $indentStr = str_repeat(" ", $indent);

            $docComment = Helper::strReplaceFirst(
                "* @",
                "* @internal\n" . $indentStr . " *\n" . $indentStr . " * @",
                $docComment
            );
        }

        parent::addGetter($type, $propertyName, $docComment);
    }
}
