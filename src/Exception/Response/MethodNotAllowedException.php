<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

class MethodNotAllowedException extends ResponseException {
    protected array $allowedMethods;

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
