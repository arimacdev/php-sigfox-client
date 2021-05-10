<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\UserUpdate;
/**
 * Update a given user.
 * 
 */
class UsersIdUpdate extends Definition
{
    /**
     * The user to update
     *
     * @var UserUpdate
     */
    protected ?UserUpdate $user = null;
    protected $serialize = array('user' => UserUpdate::class);
    protected $body = array('user');
    /**
     * Setter for user
     *
     * @param UserUpdate $user The user to update
     *
     * @return self To use in method chains
     */
    public function setUser(?UserUpdate $user) : self
    {
        $this->user = $user;
        return $this;
    }
}