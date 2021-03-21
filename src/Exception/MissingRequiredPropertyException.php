<?php

namespace Arimac\Sigfox\Exception;

use Exception;

class MissingRequiredPropertyException extends Exception
{
    protected string $missingProperty;

    protected array $requiredProperties;

    protected string $className;

    public function __construct(string $className, array $required, string $missing)
    {
        $this->requiredProperties = $required;
        $this->missingProperty = $missing;
        $this->className = $className;

        parent::__construct(sprintf(
            "Can not deserialize %s object. Missing required properties %s. All of %s properties are required",
            $className,
            json_encode($missing),
            json_encode($required)
        ));
    }

    public function getMissingProperty(): string
    {
        return $this->missingProperty;
    }

    public function getRequiredProperties(): array
    {
        return $this->requiredProperties;
    }

    public function getObjectName(): string
    {
        return $this->className;
    }
}
