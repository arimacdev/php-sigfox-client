<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\UserRole;
/**
 * Generic information about user operation
 */
class BaseResponse
{
    /**
     * Additional information about the operation
     *
     * @var string
     */
    protected string $message;
    /** @var UserRole[] */
    protected array $userRoles;
}