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
}