<?php
namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 401 Unauthorized error
 */
class UnauthorizedException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param Throwable $prev Previous exception
     */
    public function __construct(Throwable $prev = null)
    {
        parent::__construct("Unauthorized. Authentication (ID/password) error.", 401, $prev);
    }
}
