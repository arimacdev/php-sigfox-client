<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;

class PrimitiveSerializer extends Serializer {
    protected string $type;

    public function __construct(string $classname, string $propertyName, string $type)
    {
        parent::__construct($classname, $propertyName);
        $this->type = $type;
    }

    protected function validate($value): bool{
     $validated = false;
        switch($this->type){
            case "string":
                $validated = is_string($value);
                break;
            case "int":
                $validated = is_int($value);
                break;
            case "float":
                $validated = is_float($value);
                break;
            case "array":
                $validated = is_array($value);
                break;
            case "bool":
                $validated = is_bool($value);
                break;
        } 
     return $validated;
        
    }

    public function serialize($value)
    {
        if(is_null($value)){
            return null;
        }

        if(!$this->validate($value)) {
            throw new SerializeException($this->className, $this->propertyName, $this->getParentType());
        }

        return $value;
    }

    public function deserialize($value)
    {
    if(is_null($value)){
            return null;
        }

        if(!$this->validate($value)) {
            throw new DeserializeException($this->className, $this->propertyName, $this->getParentType());
        }

        return $value;
    }

    protected function getType(): string {
        return $this->type;
    }
}
