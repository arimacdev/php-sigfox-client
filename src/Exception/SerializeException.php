<?php

namespace Arimac\Sigfox\Exception;

use Exception;

/**
 * Deserialization exceptions.
 */
class SerializeException extends Exception
{

    /** @internal **/
    protected string $className;

    /** @internal **/
    protected string $propertyName;

    /** @internal **/
    protected string $expectedType;

    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string $className    Name of the class that the value exists
     * @param string $propertyName Name of the property that the value exists
     * @param string $expectedType Expected type for the given property
     */
    public function __construct(string $className, string $propertyName, string $expectedType)
    {
        parent::__construct(
            "Can not serialize the $className:$propertyName property as $expectedType."
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
