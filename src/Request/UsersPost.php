<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class UsersPost extends Definition
{
    protected $required = array('user');
    /**
     * The user to create
     *
     * @var array
     */
    protected array $user;
    protected $body = array('user');
    /**
     * @param array $user The user to create
     */
    function setUser(array $user)
    {
        $this->user = $user;
    }
}