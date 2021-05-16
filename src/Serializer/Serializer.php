<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;

abstract class Serializer {

    protected ?Serializer $parent;

    protected string $className;

    protected string $propertyName;

    /**
     * Initializing the serializer
     *
     * @param string $className    Name of the class that property exist. For error reporting purposes
     * @param string $propertyName Name of the property. For error reporting purposes
     */
    public function __construct(string $className, string $propertyName)
    {
        $this->className = $className;
        $this->propertyName = $propertyName;
    }

    /**
     * Serializing an array or instance to a class instance
     *
     * @param mixed $value Value to serialize
     *
     * @throws SerializeException
     *
     * @return mixed Serialized value
     */
    abstract public function serialize($value);

    /**
     * Deserializing an instance to a json serializable value
     *
     * @param mixed $value
     *
     * @throws DeserializeException
     *
     * @return mixed
     */
    abstract public function deserialize($value);

    /**
     * Returning the type name of the item
     *
     * Using for error reporting purposes
     *
     * @return string
     */
    abstract protected function getType(): string;

    /**
     * Setting the upper level serializer
     *
     * @param Serializer $parent
     */
    public function setParent(Serializer $parent){
        $this->parent = $parent;
    }

    /**
     * Returning the upper level serializer
     *
     * @return Serializer
     */
    public function getParent(): ?Serializer {
        return $this->parent;
    }

    /**
     * Returning the super parent type
     *
     * For error reporting purposes
     *
     * @return string
     */
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
