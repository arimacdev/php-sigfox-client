<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

class InternalServerException extends ResponseException {
    public function __construct(Throwable $prev = null)
    {
        parent::__construct("Internal Server Error", 500, $prev);
    }
}
