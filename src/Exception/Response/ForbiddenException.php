<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 403 Forbidden error
 */
class ForbiddenException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @param string    $message The error message that returning from the server
     * @param Throwable $prev    Previous exception
     */
    public function __construct(string $message, Throwable $prev = null)
    {
        parent::__construct($message, 403, $prev);
    }
}
