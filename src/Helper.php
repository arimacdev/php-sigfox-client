<?php

namespace Arimac\Sigfox;

use stdClass;

class Helper {
    /**
     * Filter only required keys from a large array
     *
     * @param array $arr Input array
     * @param string[] $needles Keys to filter
     *
     * @return array New filtered array
     */
    public static function arrayFilterKeys(array $arr, array $keys){
        $newArr = [];
        foreach($arr as $key=> $val){
            if(in_array($key, $keys)){
                $newArr[$key] = $val;
            }
        }
        return $newArr;
    }

    /**
     * Binding path parameters to the URL
     *
     * @internal
     *
     * @param string $url URL with path parameter names. Example:- `/user/{id}`
     * @param array ...$params Value to replace path parameters
     *
     * @return string URL with replaced path parameter values
     */
    public static function bindUrlParams(string $url, ...$params): string {
        $slices = explode("/", $url);
        foreach($slices as $key=> $slice){
            if(preg_match("/\{(.*)\}/", $slice)){
                $current = array_shift($params);
                $slices[$key] = (string) $current;
            }
        }
        return implode("/", $slices);
    }

    /**
     * Returning the JSON serializable error value from a nested array or a object
     *
     * @param mixed $value
     *
     * @return bool
     */
    public static function getJSONSerializableErrorValue($value)
    {
        if (is_array($value) || (is_object($value) && $value instanceof stdClass)) {
            foreach ($value as $val) {
                $err = self::getJSONSerializableErrorValue($val);
                if($err){
                    return $err;
                }
            }
        } else if(is_object($value)){
            return $value;
        }

        return null;
    }
}
