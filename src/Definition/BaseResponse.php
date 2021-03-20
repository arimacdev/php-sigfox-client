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
    /**
     * @param string message Additional information about the operation
     */
    function setMessage(string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string Additional information about the operation
     */
    function getMessage() : string
    {
        return $this->message;
    }
    /**
     * @param UserRole[] userRoles
     */
    function setUserRoles(array $userRoles)
    {
        $this->userRoles = $userRoles;
    }
    /**
     * @return UserRole[] userRoles
     */
    function getUserRoles() : array
    {
        return $this->userRoles;
    }
}