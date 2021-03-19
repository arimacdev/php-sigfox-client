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
