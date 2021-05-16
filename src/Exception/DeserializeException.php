<?php

namespace Arimac\Sigfox\Exception;

use Exception;

/**
 * Deserialization exceptions.
 */
class DeserializeException extends Exception
{

    protected string $className;

    protected string $propertyName;

    protected string $expectedType;

    /**
     * Initializing the exception
     *
     * @param string $className    Name of the class that the value exists
     * @param string $propertyName Name of the property that the value exists
     * @param string $expectedType Expected type for the given property
     */
    public function __construct(string $className, string $propertyName, string $expectedType)
    {
        parent::__construct(
            "Can not deserialize the $className:$propertyName property as $expectedType."
        );
        $this->className = $className;
        $this->propertyName = $propertyName;
        $this->expectedType = $expectedType;
    }

    /**
     * Name of the class that the value exists
     *
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * Name of the property that the value exists
     *
     * @return string
     */
    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    /**
     * Expected type for the property
     *
     * @return string
     */
    public function getExpectedType(): string
    {
        return $this->expectedType;
    }
}
