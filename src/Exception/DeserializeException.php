<?php
namespace Arimac\Sigfox\Exception;

use Exception;

class DeserializeException extends Exception {

    protected string $className;

    protected string $propertyName;

    protected string $expectedType;

    public function __construct(string $className, string $propertyName, string $expectedType)
    {
        parent::__construct(
            "Can not deserialize the $className:$propertyName property as $expectedType."
        );
        $this->className = $className;
        $this->propertyName = $propertyName;
        $this->expectedType = $expectedType;
    }

    public function getClassName(): string {
        return $this->className;
    }

    public function getPropertyName(): string {
        return $this->propertyName;
    }

    public function getExpectedType(): string {
        return $this->expectedType;
    }
}
