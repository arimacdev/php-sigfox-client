<?php

namespace Arimac\Sigfox\GenCode\Utils;

function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") rrmdir($dir . "/" . $object);
                else unlink($dir . "/" . $object);
            }
        }
        reset($objects);
        rmdir($dir);
    }
}

function typeCast(string $type, ?string $format = null): string
{
    switch ($type) {
        case "integer":
            return "int";
        case "number":
            return "int";
        case "boolean":
            return "bool";
        default:
            return $type;
    }
}

function camelToUnderscore(string $str): string
{
    return strtoupper(preg_replace('/(?<=\\w)(?=[A-Z])/', "_$1", $str));
}
