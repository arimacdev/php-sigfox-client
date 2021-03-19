<?php

use Arimac\Sigfox\GenCode\Definition;
use cebe\openapi\Reader;

use function Arimac\Sigfox\GenCode\Utils\rrmdir;
use function Arimac\Sigfox\GenCode\Utils\typeCast;

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

foreach ($openapi->definitions as $key => $definition) {
    $name = ucfirst($key);
    $defClass = new Definition($name, $definition["description"] ?? null);

    if (isset($definition["properties"])) {
        $required = $definition["required"] ?? [];
        foreach ($definition["properties"] as $propertyName => $propertyAttr) {
            if (isset($propertyAttr["type"])) {
                $defClass->addPrimitiveTypeProperty(
                    $propertyName,
                    typeCast($propertyAttr["type"]),
                    in_array($propertyName, $required),
                    $propertyAttr["description"] ?? null
                );
            }
        }
    }
    file_put_contents($dir . "/../src/Definition/" . $name . ".php", $defClass->getContents());
}
