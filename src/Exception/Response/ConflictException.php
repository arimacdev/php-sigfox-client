<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

class ConflictException extends ResponseException {
    public function __construct(string $message, Throwable $prev = null)
    {
        parent::__construct($message, 409, $prev);
    }
}
