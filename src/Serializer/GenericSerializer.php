<?php

namespace Arimac\Sigfox\Serializer;

/**
 * Serializing and deserializing generic types
 */
class GenericSerializer extends Serializer {
    protected string $parentType;

    protected Serializer $childType;

    /**
     * Initializing the serializer
     *
     * @param string     $className    Name of the class that property exist. For error reporting purposes
     * @param string     $propertyName Name of the property. For error reporting purposes
     * @param string     $parent       Parent clas name
     * @param Serializer $child        Serializer of the child item
     */
    public function __construct(
        string $className, 
        string $propertyName, 
        string $parent, 
        Serializer $child
    )
    {
        parent::__construct($className, $propertyName);
        $this->parentType = $parent;
        $this->childType = $child;
        $child->setParent($this);
    }

    /**
     * @inheritdoc
     */
    public function serialize($value)
    {
        return $this->parentType::serialize($this->className, $this->propertyName, $this->childType, $value);
    }

    /**
     * @inheritdoc
     */
    public function deserialize($value)
    {
        return $this->parentType::deserialize($this->className, $this->propertyName, $this->childType, $value);
    }

    /**
     * @inheritdoc
     */
    protected function getType(): string {
        return $this->parentType."<".$this->childType->getType().">";
    }
}
