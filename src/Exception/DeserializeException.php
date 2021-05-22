<?php

namespace Arimac\Sigfox\Exception;

/**
 * Deserialization exceptions.
 */
class DeserializeException extends SerializeException
{
    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string[] $expectedTypes Expected types for the given property
     * @param string   $actualType    The type of the user passed value
     */
    public function __construct(array $expectedTypes, string $actualType)
    {
        parent::__construct($expectedTypes, $actualType);
        $this->message = str_replace("serialize", "deserialize", $this->message);
    }
}
