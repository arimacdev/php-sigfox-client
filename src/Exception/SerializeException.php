<?php

namespace Arimac\Sigfox\Exception;

/**
 * Deserialization exceptions.
 */
class SerializeException extends SigfoxException
{
    /** @internal **/
    protected array $expectedTypes;

    /** @internal **/
    protected string $actualType;

    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string $expectedTypes Expected types for the given property
     * @param string $actualType    The type of the user passed value
     */
    public function __construct(array $expectedTypes, string $actualType)
    {
        $expectedDisplay = "";
        if(count($expectedTypes)>1){
            $expectedDisplay = "one of ".implode(", ",$expectedTypes);
        } else {
            $expectedDisplay = $expectedTypes[0];
        }

        parent::__construct("Can not serialize the value. Expected a $expectedDisplay, but got $actualType");

        $this->expectedTypes = $expectedTypes;
        $this->actualType = $actualType;
    }

    /**
     * Expected type for the property
     *
     * @return string[]
     */
    public function getExpectedTypes(): array
    {
        return $this->expectedTypes;
    }

    /**
     * Actual type that user passed
     *
     * @return string
     */
    public function getActualType(): string {
        return $this->actualType;
    }
}
