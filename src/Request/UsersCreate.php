<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\UserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'user', UserCreation::class));
    protected $body = array('user');
    protected $validations = array('user' => array('required'));
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