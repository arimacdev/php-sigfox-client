<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\UserRole;
use Arimac\Sigfox\Definition;
/**
 * Generic information about user operation
 */
class BaseResponse extends Definition
{
    /**
     * Additional information about the operation
     *
     * @var string
     */
    protected ?string $message = null;
    /** @var UserRole[] */
    protected ?array $userRoles = null;
    /**
     * @param string $message Additional information about the operation
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string Additional information about the operation
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @param UserRole[] userRoles
     */
    function setUserRoles(?array $userRoles)
    {
        $this->userRoles = $userRoles;
    }
    /**
     * @return UserRole[] userRoles
     */
    function getUserRoles() : ?array
    {
        return $this->userRoles;
    }
}