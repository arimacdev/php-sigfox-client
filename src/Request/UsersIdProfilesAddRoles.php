<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * add user roles to a user.
 * 
 */
class UsersIdProfilesAddRoles extends Definition
{
    /**
     * user roles array to add
     *
     * @var array
     */
    protected ?array $userRoles = null;
    protected $body = array('userRoles');
    /**
     * Setter for userRoles
     *
     * @param array $userRoles user roles array to add
     *
     * @return self To use in method chains
     */
    public function setUserRoles(?array $userRoles) : self
    {
        $this->userRoles = $userRoles;
        return $this;
    }
}