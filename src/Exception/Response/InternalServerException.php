<?php

namespace Arimac\Sigfox\Exception\Response;

use Throwable;

/**
 * HTTP 500 Internal Server Error
 */
class InternalServerException extends ResponseException {
    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param Throwable $prev Previous exception
     */
    public function __construct(Throwable $prev = null)
    {
        parent::__construct("Internal Server Error", 500, $prev);
    }

    /**
     * @internal
     *
     * @inheritdoc
     *
     * @param mixed $value
     *
     * @return self
     */
    public static function deserialize($value)
    {
        return new InternalServerException();
    }
}
