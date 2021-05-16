<?php

namespace Arimac\Sigfox;

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
}
