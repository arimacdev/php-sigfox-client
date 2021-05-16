<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\UserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new user.
 */
class UsersCreate extends Request
{
    /**
     * The user to create
     *
     * @var UserCreation
     */
    protected ?UserCreation $user = null;
    protected array $body = array('user');
    protected array $validations = array('user' => array('required'));
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
    /**
     * Getter for user
     *
     * @return UserCreation The user to create
     */
    public function getUser() : ?UserCreation
    {
        return $this->user;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('user' => new ClassSerializer(self::class, 'user', UserCreation::class));
    }
}