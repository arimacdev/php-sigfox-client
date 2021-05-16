<?php

namespace Arimac\Sigfox\Serializer;

/**
 * Serializing and deserializing generic types
 */
class GenericSerializer implements Serializer {
    protected string $parentType;

    protected Serializer $childType;

    /**
     * Initializing the serializer
     *
     * @param string     $parent Parent clas name
     * @param Serializer $child  Serializer of the child item
     */
    public function __construct(
        string $parent, 
        Serializer $child
    )
    {
        $this->parentType = $parent;
        $this->childType = $child;
    }

    /**
     * @inheritdoc
     */
    public function serialize($value)
    {
        return $this->parentType::serialize($this->childType, $value);
    }

    /**
     * @inheritdoc
     */
    public function deserialize($value)
    {
        return $this->parentType::deserialize($this->childType, $value);
    }
}
