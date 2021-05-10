<?php

namespace Arimac\Sigfox\GenCode\Config;

class EnumFields implements FileImpl
{
    use File;

    protected static $ignore = [
        "Arimac\\Sigfox\\Definition\\Antenna" => ["model"]
    ];

    static function getFilename(): string
    {
        return "enumFields";
    }

    public static function getConstants($className, $propertyName, $description)
    {
        $existConstants = self::get($className,$propertyName);
        if(
            $existConstants&&
            isset(self::$ignore[$className])&&
            in_array($propertyName, self::$ignore[$className])
        ){
            self::unset($className,$propertyName);
            return [];
        }
        $constants = [];
        $lines = explode("\n", $description);
        $comment = "";
        foreach ($lines as $line) {
            $constLine = false;
            if (substr_count($line, "->")) {
                $slices = explode("->", $line);
                $value = $slices[0];
                $text = $slices[1];

                $numericValue = preg_replace("/[^0-9A-Za-z]/", "", $value);

                if (is_numeric($numericValue)) {
                    $constLine = true;
                    $constName = $text;
                    if (substr_count($text, "(")) {
                        $constName = explode("(", $constName)[0];
                    }

                    $constName = strtoupper(str_replace(" ", "_", preg_replace("/[^A-Za-z0-9_\s]/", "", trim($constName))));
                    $constants[$constName] =[
                        "value"=>(int) $numericValue,
                        "comment"=> trim($text)
                    ];
                }
            }

            if(!$constLine){
                $comment .= $line ."\n";
            }
        }

        if (!$existConstants) {
            printf("WARN: ENUM: A new enum field discovered. $className:$propertyName\n");

            $modConstants = $constants;
            $modConstants["debug"] = $lines;
            $modConstants["comment"] = trim($comment);

            self::set($className,$propertyName, $modConstants);
            return [];
        }

        if (isset($existConstants["debug"])) {
            printf("WARN: ENUM: Not formatted the field. $className:$propertyName\n");
        } else {
            if (count(array_keys($existConstants))-1 !== count(array_keys($constants))) {
                printf(
                    "WARN: ENUM: A new enum field discovered. $className:$propertyName\n%s\n",
                    json_encode(array_diff(array_keys($existConstants), array_keys($constants)))
                );
            }
            return $existConstants;
        }

        return null;
    }
}
