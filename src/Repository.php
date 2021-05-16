<?php

namespace Arimac\Sigfox;

class Repository {
    /**
     * Binding path parameters to the URL
     *
     * @param string $url URL with path parameter names. Example:- `/user/{id}`
     * @param array ...$params Value to replace path parameters
     *
     * @return string URL with replaced path parameter values
     */
    protected function bind(string $url, ...$params): string {
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
