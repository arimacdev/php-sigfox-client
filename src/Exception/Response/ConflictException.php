<?php

namespace Arimac\Sigfox\Exception\Response;

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
}
