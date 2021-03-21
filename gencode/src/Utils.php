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

function camelToUnderscore(string $str): string
{
    return strtoupper(preg_replace('/(?<=\\w)(?=[A-Z])/', "_$1", $str));
}

function defToName(string $defStr): string
{
    return ucfirst(substr($defStr, 14));
}

function extractEnumFieldsFromDescription(string $className, string $propertyName, string &$description): array
{
    $lines = explode("\n", $description);

    $fields = [];

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

            $fields[$constName] = [(int) $value, $description];

            $lines[$key] = sprintf("- `%s::%s`", $className, $constName);
        }
    }

    $description = implode("\n", $lines);

    return $fields;
}
