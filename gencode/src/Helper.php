<?php

namespace Arimac\Sigfox\GenCode;

class Helper
{
    /**
     * Writing doc block comments by keeping PSR2 standards
     *
     * @param string   $description The textual comment
     * @param int      $level       The nested level of the comment
     * @param string[] $annotations Annotations
     *
     * @return string
     */
    public static function normalizeDocComment($description = "",  $annotations = [], $level = 1)
    {
        if (is_array($description)) {
            if (is_numeric($annotations)) {
                $level = $annotations;
            }
            $annotations = $description;
            $description = "";
        }
        if (is_numeric($annotations)) {
            $level = $annotations;
            $annotations = [];
        }
        $docComment = "";
        if ($description && $description !== "") {
            $description = trim($description);
            $lines = explode("\n", $description);
            foreach ($lines as $line) {
                $line = trim($line);
                // 4 = tab size, 120 = PSR2 max line width 2 = " *"
                $allocatedSize = 120 - 4 * ($level - 0) - 2;
                if (strlen($line) > $allocatedSize) {
                    $words = explode(" ", $line);
                    $width = 0;
                    $buffer = [];
                    foreach ($words as $word) {
                        if ($width + strlen($word) > $allocatedSize) {
                            $docComment .= " * " . implode(" ", $buffer) . "\n";
                            $buffer = [];
                            $width = 0;
                        }
                        // 1 = space after word
                        $width += strlen($word) + 1;
                        array_push($buffer, $word);
                    }
                    if (count($buffer) > 0) {
                        $docComment .= " * " . implode(" ", $buffer) . "\n";
                    }
                } else {
                    $docComment .= " * " . $line . "\n";
                }
            }
        }

        if (count($annotations)) {
            if ($description && $description !== "") {

                $docComment .= " *\n";
            }

            usort($annotations, function ($a, $b) {
                return strcmp($a[0], $b[0]);
            });

            $columnSizes = [];
            foreach ($annotations as $annotation) {
                $group = $annotation[0];
                $params = array_slice($annotation, 1, count($annotation) - 2);
                $sizes = array_map('strlen', $params);
                if (!isset($columnSizes[$group])) {
                    $columnSizes[$group] = $sizes;
                } else {
                    foreach ($sizes as $key => $size) {
                        if ($size > $columnSizes[$group][$key]) {
                            $columnSizes[$group][$key] = $size;
                        }
                    }
                }
            }

            $prevGroup = null;
            foreach ($annotations as $annotation) {
                $group = array_shift($annotation);
                if ($prevGroup && $prevGroup !== $group) {
                    $docComment .= " *\n";
                }
                $text = array_pop($annotation);
                $sizes = $columnSizes[$group];
                $params = implode(" ", array_map(function ($item, $i) use ($sizes) {
                    return str_pad($item, $sizes[$i]);
                }, $annotation, array_keys($annotation)));

                if (count($annotation)) {
                    $prefix = "@$group $params";
                } else {
                    $prefix = "@$group";
                }

                if ($text) {
                    $lines = explode("\n", $text);

                    foreach ($lines as $key => $line) {

                        $prefixWidth = strlen($prefix);

                        // 4 = tab size, 120 = PSR2 max line width , 3 = " * "
                        $allocatedSize = 120 - 4 * ($level - 0) - $prefixWidth - 3;
                        if (strlen($line) > $allocatedSize) {
                            $words = explode(" ", $line);
                            $width = 0;
                            $buffer = [];
                            foreach ($words as $word) {
                                if ($width + strlen($word) > $allocatedSize) {
                                    $docComment .= " * $prefix " . implode(" ", $buffer) . "\n";
                                    $prefix = str_pad("", $prefixWidth);
                                    $buffer = [];
                                    $width = 0;
                                }
                                // 1 = space after word
                                $width += strlen($word) + 1;
                                array_push($buffer, $word);
                            }
                            if (count($buffer) > 0) {
                                $docComment .= " * $prefix " . implode(" ", $buffer) . "\n";
                                $prefix = str_pad("", $prefixWidth);
                            }
                        } else {
                            $docComment .= " * $prefix " . $line . "\n";
                            $prefix = str_pad("", $prefixWidth);
                        }
                    }
                } else {

                    $docComment .= " * " . trim($prefix) . "\n";
                }
                $prevGroup = $group;
            }
        }


        return "/**\n$docComment */";
    }

    /**
     * Converting the definition id to a class name
     *
     * @param string $defStr
     *
     * @return string
     */
    public static function defToName(string $defStr): string
    {
        return ucfirst(substr($defStr, 14));
    }

    /**
     * Converting high level types to PHP values
     *
     * @param string $type
     *
     * @return string
     */
    public static function toPHPValue(string $type): string
    {
        switch ($type) {
            case "integer":
                return "int";
            case "number":
                return "float";
            case "double":
                return "float";
            case "boolean":
                return "bool";
            case "string":
                return "string";
            case "array":
                return "array";
            default:
                if (substr($type, strlen($type) - 2) === "[]") {
                    return "array";
                }

                $last = substr($type, strlen($type) - 1);
                if ($last === ">") {
                    return explode("<", $type, 1)[0];
                } else if ($last === "*") {
                    return "int";
                }

                return $type;
        }
    }

    /**
     * Converting a camel case string to an undersocore notation string
     * 
     * @param string $str
     *
     * @return string
     */
    public static function camelToUnderscore(string $str): string
    {
        return strtoupper(preg_replace('/(?<=\\w)(?=[A-Z])/', "_$1", $str));
    }

    /**
     * Converting a string with dashes to camel case
     *
     * @param string $str
     *
     * @return string
     */
    public static function dashToCamel(string $str): string
    {
        $slices = explode("-", $str);
        $slices = array_map(function ($slice) {
            return ucfirst($slice);
        }, $slices);

        return preg_replace("/[^A-Za-z]/", "", implode("", $slices));
    }

    /**
     * Recursively remove a directory
     *
     * @param string $dir
     */
    public static function rrmdir(string $dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir") self::rrmdir($dir . "/" . $object);
                    else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }

    /**
     * Find and replace only the firs occurance of a string
     *
     * @param string $search  String to search
     * @param string $replace String to replace with
     * @param string $subject The text
     *
     * @return string
     */
    public static function strReplaceFirst(string $search, string $replace, string $subject): string{
        $pos = strpos($subject, $search);
        if ($pos !== false) {
            return substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }
}
