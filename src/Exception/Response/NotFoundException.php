<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

class NotFoundException extends ResponseException {
    public function __construct(string $message, Throwable $prev = null)
    {
        parent::__construct($message, 404, $prev);
    }

}
