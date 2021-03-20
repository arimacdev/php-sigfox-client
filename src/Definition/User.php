<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonUser;
use Arimac\Sigfox\Definition\UserRole;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Information about a User
 */
class User extends CommonUser
{
    /**
     * The user's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The user's email
     *
     * @var string
     */
    protected string $email;
    /**
     * If the user account is locked or not
     *
     * @var bool
     */
    protected bool $locked;
    /**
     * The user's creation time (in millisecond since Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * The user's last login time
     *
     * @var int
     */
    protected int $lastLoginTime;
    /** @var UserRole[] */
    protected array $userRoles;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The user's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The user's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string email The user's email
     */
    function setEmail(string $email)
    {
        $this->email = $email;
    }
    /**
     * @return string The user's email
     */
    function getEmail() : string
    {
        return $this->email;
    }
    /**
     * @param bool locked If the user account is locked or not
     */
    function setLocked(bool $locked)
    {
        $this->locked = $locked;
    }
    /**
     * @return bool If the user account is locked or not
     */
    function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * @param int creationTime The user's creation time (in millisecond since Unix Epoch)
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int The user's creation time (in millisecond since Unix Epoch)
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param int lastLoginTime The user's last login time
     */
    function setLastLoginTime(int $lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;
    }
    /**
     * @return int The user's last login time
     */
    function getLastLoginTime() : int
    {
        return $this->lastLoginTime;
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
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}