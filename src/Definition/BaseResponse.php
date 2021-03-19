<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about user operation
 */
class BaseResponse
{
    /**
     * Additional information about the operation
     */
    protected string $message;
    protected array $userRoles;
}