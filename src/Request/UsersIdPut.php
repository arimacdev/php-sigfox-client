<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class UsersIdPut extends Definition
{
    protected $required = array('user');
    /**
     * The user to update
     *
     * @var array
     */
    protected array $user;
    protected $body = array('user');
    /**
     * @param array $user The user to update
     */
    function setUser(array $user)
    {
        $this->user = $user;
    }
}