<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\Serializer;

/**
 * Serializing and deserializing arrays
 */
class ArraySerializer extends Serializer {
    protected Serializer $item;

    protected string $propertyName;

    /**
     * Initializing the serializer
     *
     * @param string     $className    Name of the class that property exist. For error reporting purposes
     * @param string     $propertyName Name of the property. For error reporting purposes
     * @param Serializer $item         The serializer of the inner item
     */
    public function __construct(string $className, string $propertyName, Serializer $item)
    {
        parent::__construct($className, $propertyName);
        $this->item = $item;    
        $item->setParent($this);
    }

    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
    protected function getType(): string {
        return $this->item->getType()."[]";
    }
}
