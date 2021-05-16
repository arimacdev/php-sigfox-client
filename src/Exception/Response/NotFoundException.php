<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 404 Not Found error
 */
class NotFoundException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @param string    $message The error message that returning from the server
     * @param Throwable $prev    Previous exception
     */
    public function __construct(string $message, Throwable $prev = null)
    {
        parent::__construct($message, 404, $prev);
    }

}
