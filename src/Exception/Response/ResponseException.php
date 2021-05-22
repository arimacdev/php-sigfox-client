<?php

namespace Arimac\Sigfox\Exception\Response;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SigfoxException;

/**
 * All HTTP errors returning from Sigfox API
 */
abstract class ResponseException extends SigfoxException {
    /**
     * Deserializing a JSON serializable scalar value as an Exception
     *
     * @internal
     *
     * @param mixed $value JSON serializable scalar value
     *
     * @return static Deserialized Exception
     *
     * @throws DeserializeException
     */
    abstract public static function deserialize($value);
}
