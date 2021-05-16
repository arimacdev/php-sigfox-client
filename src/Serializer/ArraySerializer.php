<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\Serializer;

/**
 * Serializing and deserializing arrays
 */
class ArraySerializer implements Serializer {
    protected Serializer $item;

    /**
     * Initializing the serializer
     *
     * @param Serializer $item The serializer of the inner item
     */
    public function __construct(Serializer $item)
    {
        $this->item = $item;    
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
           throw new SerializeException(["array"], gettype($value)) ;
        }
        $itemSerializer = $this->item;

        $newArr = [];
        foreach($value as $key=> $val){
            $newArr[$key] = $itemSerializer->serialize($val);
        }
        return $newArr;
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
           throw new DeserializeException(["array"], gettype($value)) ;
        }
        $itemSerializer = $this->item;

        $newArr = [];
        foreach($value as $key=> $val){
            $newArr[$key] = $itemSerializer->deserialize($val);
        }
        return $newArr;
    }
}
