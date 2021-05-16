<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;

interface Serializer {
    /**
     * Serializing an object instance to a json serializable value
     *
     * @param mixed $value Value to serialize
     *
     * @throws SerializeException
     *
     * @return mixed Serialized value
     */
    public function serialize($value);

    /**
     * Deserializing a json serializable value to an object instance
     *
     * @param mixed $value
     *
     * @throws DeserializeException
     *
     * @return mixed
     */
    public function deserialize($value);
}
