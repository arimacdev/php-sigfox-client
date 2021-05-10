<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\UserCreation;
/**
 * Create a new user.
 * 
 */
class UsersCreate extends Definition
{
    /**
     * The user to create
     *
     * @var UserCreation
     */
    protected ?UserCreation $user = null;
    protected $serialize = array('user' => UserCreation::class);
    protected $body = array('user');
    /**
     * Setter for user
     *
     * @param UserCreation $user The user to create
     *
     * @return self To use in method chains
     */
    public function setUser(?UserCreation $user) : self
    {
        $this->user = $user;
        return $this;
    }
}