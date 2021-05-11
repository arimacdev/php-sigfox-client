<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\Serializer;

class ArraySerializer extends Serializer {
    protected Serializer $item;

    protected string $propertyName;

    public function __construct(string $className, string $propertyName, Serializer $item)
    {
        parent::__construct($className, $propertyName);
        $this->item = $item;    
        $item->setParent($this);
    }

    public function serialize($value)
    {
        if(is_null($value)){
            return null;
        }
        if(!is_array($value)){
           throw new SerializeException($this->className, $this->propertyName, $this->getParentType()) ;
        }
        $itemSerializer = $this->item;

        return array_map(function($item) use ($itemSerializer){
            return $itemSerializer->serialize($item);
        },$value);
    }

    public function deserialize($value)
    {
        if(is_null($value)){
            return null;
        }
        if(!is_array($value)){
           throw new SerializeException($this->className, $this->propertyName, $this->getParentType()) ;
        }
        $itemSerializer = $this->item;

        return array_map(function($item) use ($itemSerializer){
            return $itemSerializer->deserialize($item);
        },$value); 
        
    }

    protected function getType(): string {
        return $this->item->getType()."[]";
    }
}
