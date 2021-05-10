<?php

namespace Arimac\Sigfox\GenCode\Config;

use ArgumentCountError;

trait File {
    protected static $content = [];

    protected static $modified = false;

    public static function initialize(){
        self::$content = json_decode(file_get_contents(
            dirname(__DIR__) . "/../config/".static::getFilename().".json"
        ), true)??[];
    }

    protected static function unset(...$keys){
        $content = &self::$content;
        self::$modified = true;

        $lastKey = array_pop($keys);

        if(!$lastKey){
            throw new ArgumentCountError(
                "Too few arguments supplied to File::set method. Expected at least one argument"
            );
        }
        
        foreach($keys as $key){
            if(isset($content[$key])){
                $content = &$content[$key];
            } else {
                $content[$key] = [];
                $content = &$content[$key];
            }
        } 

        unset($content[$lastKey]); 
    }

    protected static function set(...$keys) {
        $content = &self::$content;
        self::$modified = true;

        $value = array_pop($keys);
        $lastKey = array_pop($keys);

        if(!$value||!$lastKey){
            throw new ArgumentCountError(
                "Too few arguments supplied to File::set method. Expected at least two arguments"
            );
        }
        
        foreach($keys as $key){
            if(isset($content[$key])){
                $content = &$content[$key];
            } else {
                $content[$key] = [];
                $content = &$content[$key];
            }
        } 

        $content[$lastKey] = $value;
    }

    protected static function get(...$keys){
        $content = &self::$content;

        foreach($keys as $key){
            if(isset($content[$key])){
                $content = &$content[$key];
            } else {
               return null; 
            }
        } 

        return $content;
    }

    public static function save(){
        if (self::$modified) {
            file_put_contents(
                dirname(__DIR__) . "/../config/".static::getFilename().".json",
                json_encode(self::$content, JSON_PRETTY_PRINT)
            );
        } 
    }
}
