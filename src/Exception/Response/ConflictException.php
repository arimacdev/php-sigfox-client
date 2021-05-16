<?php

namespace Arimac\Sigfox\Exception\Response;

use Arimac\Sigfox\Exception\DeserializeException;
use Throwable;

/**
 * HTTP 409 Conflict error
 */
class ConflictException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string    $message The error message that returning from the server
     * @param Throwable $prev    Previous exception
     */
    public function __construct(string $message, Throwable $prev = null)
    {
        parent::__construct($message, 409, $prev);
    }

    /**
     * @internal
     *
     * @inheritdoc
     */
    public static function deserialize($value): ConflictException
    {
        if(!is_array($value)||!isset($value["message"])){
            throw new DeserializeException(
                ["array(message)"],
                is_array($value)? "array(".implode(", ", array_keys($value)).")" :gettype($value)
            );
        }

        $message = $value["message"];
        if(!is_string($message)){
            throw new DeserializeException(["string"], gettype($message));
        }

        return new ConflictException($message);
    }
}
