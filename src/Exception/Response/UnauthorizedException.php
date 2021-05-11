<?php
namespace Arimac\Sigfox\Exception\Response;

use Throwable;

class UnauthorizedException extends ResponseException {
    public function __construct(Throwable $prev = null)
    {
        parent::__construct("Unauthorized. Authentication (ID/password) error.", 401, $prev);
    }
}
