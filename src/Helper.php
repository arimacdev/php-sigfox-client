<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Validator;
use stdClass;

class Helper {
    /**
     * Filter only required keys from a large array
     *
     * @param array    $arr  Input array
     * @param string[] $keys Keys to filter
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
     * @param string ...$params Value to replace path parameters
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
     * @return mixed
     */
    public static function getJSONSerializableErrorValue($value)
    {
        if (is_array($value) || (is_object($value) && $value instanceof stdClass)) {
            if(is_object($value)){
                $value = (array) $value;
            }
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

    /**
     * Split the request into query, body after deserializes and validates the request
     *
     * @param Request $request
     *
     * @throws SerializeException
     * @throws ValidationException
     *
     * @return array<int,array|null>
     */
    public static function splitRequest(?Request $request): array {
        $body = null;
        $query = null;
        // Serializing and validating data
        if ($request) {
            Validator::validate($request);
            $requestSerializer = new ClassSerializer(get_class($request));
            $serialized = $requestSerializer->serialize($request);

            $bodyField = $request->getBodyField();
            if ($bodyField && isset($serialized[$bodyField])) {
                $body = $serialized[$bodyField];
            }

            $query = Helper::arrayFilterKeys($serialized, $request->getQueryFields());
        }

        return [$query, $body];
    }
}
