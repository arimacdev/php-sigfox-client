<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use stdClass;

/**
 * Serializing and deserializing primitive typed values. (array, string, int, float, bool)
 */
class PrimitiveSerializer implements Serializer
{
    protected string $type;

    /**
     * Initializing the serializer
     *
     * @param string $type Name of the type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Validating the type of the value
     *
     * @param mixed $value
     *
     * @return mixed Validated value
     */
    protected function validate($value)
    {
        $validated = false;
        switch ($this->type) {
            case "string":
                $validated = is_string($value);
                break;
            case "int":
                $validated = is_int($value);
                break;
            case "float":
                $validated = is_float($value) || is_int($value);
                $value = (float) $value;
                break;
            case "double":
                $validated = is_double($value) || is_int($value);
                $value = (double) $value;
                break;
            case "array":
                $validated = is_array($value);
                if($validated){
                    foreach($value as  $val){
                        if(is_object($val)&&!($val instanceof stdClass)){
                            $validated = false;
                        }
                    }
                }
                break;
            case "bool":
                $validated = is_bool($value);
                break;
        }
        if(!$validated){
            return null;
        }
        return $value;
    }

    /**
     * @inheritdoc
     */
    public function serialize($value)
    {
        if (is_null($value)) {
            return null;
        }
        
        $value = $this->validate($value);
        if (!isset($value)) {
            throw new SerializeException([$this->type], gettype($value));
        }

        return $value;
    }

    /**
     * @inheritdoc
     */
    public function deserialize($value)
    {
        if (is_null($value)) {
            return null;
        }

        $value = $this->validate($value);
        if (!isset($value)) {
            throw new DeserializeException([$this->type], gettype($value));
        }

        return $value;
    }
}
