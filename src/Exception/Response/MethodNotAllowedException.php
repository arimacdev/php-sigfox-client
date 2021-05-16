<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 405 Method Not Allowed error
 */
class MethodNotAllowedException extends ResponseException {
    protected array $allowedMethods;

     /**
     * Initializing the exception
     *
     * @param string    $message        The error message that returning from the server
     * @param string[]  $allowedMethods All allowed HTTP methods
     * @param Throwable $prev           Previous exception
     */
    public function __construct(string $message,array $allowedMethods, Throwable $prev = null)
    {
        parent::__construct($message, 405, $prev);
        $this->allowedMethods = $allowedMethods;
    }

    /**
     * Returning all available HTTP methods for the endpoint
     *
     * @return string
     */
    public function getAllowedMethods(): array {
        return $this->allowedMethods;
    }
}
