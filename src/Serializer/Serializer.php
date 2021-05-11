<?php

namespace Arimac\Sigfox\Serializer;

abstract class Serializer {

    protected ?Serializer $parent;

    protected string $className;

    protected string $propertyName;

    public function __construct(string $className, string $propertyName)
    {
        $this->className = $className;
        $this->propertyName = $propertyName;
    }

    abstract public function serialize($value);

    abstract public function deserialize($value);

    abstract protected function getType(): string;

    /**
     * To print the type
     */
    public function setParent(Serializer $parent){
        $this->parent = $parent;
    }

    public function getParent(): ?Serializer {
        return $this->parent;
    }

    protected function getParentType(): string{
        $prevParent = $this;
        $parent = $this->parent;
        while(!$parent){
            $prevParent = $parent;
            $parent = $parent->getParent();
        }

        return $prevParent->getType();
    }
}
