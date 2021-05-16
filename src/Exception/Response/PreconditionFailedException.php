<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 412 Precondition Failed error
 */
class PreconditionFailedException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param Throwable $prev Previous exception
     */
    public function __construct(Throwable $prev = null)
    {
        parent::__construct("Precondition Failed", 412, $prev);
    }

    /**
     * @internal
     *
     * @inheritdoc
     */
    public static function deserialize($value): PreconditionFailedException
    {
        return new PreconditionFailedException();
    }
}
