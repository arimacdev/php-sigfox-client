<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;

/**
 * Serializing and deserializing primitive typed values. (array, string, int, float, bool)
 */
class PrimitiveSerializer implements Serializer
{
    protected string $type;

    /**
     * Initializing the serializer
     *
     * @param string $type Name of the type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Validating the type of the value
     *
     * @param mixed $value
     *
     * @return bool Validated
     */
    protected function validate($value): bool
    {
        $validated = false;
        switch ($this->type) {
            case "string":
                $validated = is_string($value);
                break;
            case "int":
                $validated = is_int($value);
                break;
            case "float":
                $validated = is_float($value);
                break;
            case "array":
                $validated = is_array($value);
                break;
            case "bool":
                $validated = is_bool($value);
                break;
        }
        return $validated;
    }

    /**
     * @inheritdoc
     */
    public function serialize($value)
    {
        if (is_null($value)) {
            return null;
        }

        if (!$this->validate($value)) {
            throw new SerializeException([$this->type], gettype($value));
        }

        return $value;
    }

    /**
     * @inheritdoc
     */
    public function deserialize($value)
    {
        if (is_null($value)) {
            return null;
        }

        if (!$this->validate($value)) {
            throw new DeserializeException([$this->type], gettype($value));
        }

        return $value;
    }
}
