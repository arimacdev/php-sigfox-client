<?php

namespace Arimac\Sigfox\GenCode;

use Arimac\Sigfox\GenCode\Config\EnumFields;

class Request extends Definition
{
    protected $getter = false;

    public function setQuery(array $query)
    {
        $this->setArrayProperty("query", $query);
    }

    public function setBody(array $body)
    {
        $this->setArrayProperty("body", $body);
    }

    public static function fromArray(string $name, array $definition): string
    {

        $slices = explode("\\", $name);
        $className = array_pop($slices);
        $namespace = implode("\\", $slices);

        $properties = [];

        if (isset($definition["parameters"])) {
            $body = [];
            $query = [];
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

                foreach ($properties as $property) {
                    $propertyName = $property["name"];
                    $type = Definition::fromArray($name . "\\" . ucfirst($propertyName), $property);
                    $usedType = $defClass->useType($type);
                    $phpType = Helper::toPHPValue($usedType);

                    // PHP8 Only
                    if (
                        str_starts_with($type, "Arimac\\Sigfox") &&
                        !in_array(substr($type, strlen($type) - 1), ["]", ">"])
                    ) {
                        $serialize[$propertyName] =  $phpType;
                    }

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
                                $usedType = str_replace("int", "self::" . $constPrefix . "_*", $usedType);
                                foreach ($constants as $constName => $attr) {
                                    if ($constName === "comment") {
                                        $description = $attr;
                                    } else {
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

                $defClass->save();

                return $name;
            }
        }

        return "null";
    }
}
