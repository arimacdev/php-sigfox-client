<?php

use Arimac\Sigfox\GenCode\Definition;
use cebe\openapi\Reader;

use function Arimac\Sigfox\GenCode\Utils\defToName;
use function Arimac\Sigfox\GenCode\Utils\rrmdir;

$dir = dirname(__DIR__);

require_once $dir . "/vendor/autoload.php";

$openapiFileLocation = $dir . "/tmp/openapi.json";
$openapiUrl = "https://support.sigfox.com/api/apidocs";
if (!file_exists($openapiFileLocation)) {
    file_put_contents($openapiFileLocation, fopen($openapiUrl, 'r'));
}

rrmdir($dir . "/../src/Definition");
mkdir($dir . "/../src/Definition");

$openapi = Reader::readFromJsonFile($openapiFileLocation);

function typeCast(Definition $defClass, string $type, array $obj = []): string
{
    switch ($type) {
        case "integer":
            return "int";
        case "number":
            return "int";
        case "boolean":
            return "bool";
        case "string":
            return "string";
        case "array":
            $items = $obj["items"];
            if (isset($items["\$ref"])) {
                $definition = defToName($items["\$ref"]);
                $defClass->addUse($definition);
                return $definition . "[]";
            } else if ($items["type"] != "object") {
                return typeCast($defClass, $items["type"], $items) . "[]";
            } else {
                return "array";
            }
        default:
            $defClass->addUse($type);
            return $type;
    }
}



function addProperties(Definition $defClass, $definition)
{

    if (isset($definition["properties"]) && isset($definition["type"]) && $definition["type"] == "object") {
        $required = $definition["required"] ?? array_keys($definition["properties"]);
        foreach ($definition["properties"] as $propertyName => $propertyAttr) {
            if (isset($propertyAttr["type"])) {
                $defClass->addProperty(
                    $propertyName,
                    typeCast($defClass, $propertyAttr["type"], $propertyAttr),
                    !in_array($propertyName, $required),
                    $propertyAttr["description"] ?? null
                );
            } else if (isset($propertyAttr["\$ref"])) {
                $defName = defToName($propertyAttr["\$ref"]);
                $defClass->addProperty(
                    $propertyName,
                    typeCast($defClass, $defName, $propertyAttr),
                    !in_array($propertyName, $required),
                    $propertyAttr["description"] ?? null
                );
            }
        }
    }
}

foreach ($openapi->definitions as $key => $definition) {
    $name = ucfirst($key);
    $defClass = new Definition($name, $definition["description"] ?? null);
    addProperties($defClass, $definition);


    if (isset($definition["allOf"])) {
        foreach ($definition["allOf"] as $allOf) {
            if (isset($allOf["\$ref"])) {
                $defClass->extend(defToName($allOf["\$ref"]));
            } else if (isset($allOf["type"]) && $allOf["type"] == "object") {
                addProperties($defClass, $allOf);
            }
        }
    }
    file_put_contents($dir . "/../src/Definition/" . $name . ".php", $defClass->getContents());
}
