<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class UsersIdProfilesPut extends Definition
{
    protected $required = array('userRoles');
    /**
     * user roles array to add
     *
     * @var array
     */
    protected array $userRoles;
    protected $body = array('userRoles');
    /**
     * @param array $userRoles user roles array to add
     */
    function setUserRoles(array $userRoles)
    {
        $this->userRoles = $userRoles;
    }
}