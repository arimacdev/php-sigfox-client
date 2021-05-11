<?php

namespace Arimac\Sigfox\Serializer;

class GenericSerializer extends Serializer {
    protected string $parentType;

    protected Serializer $childType;

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

    public function serialize($value)
    {
        return $this->parentType::serialize($this->className, $this->propertyName, $this->childType, $value);
    }

    public function deserialize($value)
    {
        return $this->parentType::deserialize($this->className, $this->propertyName, $this->childType, $value);
    }

    protected function getType(): string {
        return $this->parentType."<".$this->childType->getType().">";
    }
}
