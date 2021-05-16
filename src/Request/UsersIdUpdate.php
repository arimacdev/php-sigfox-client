<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\UserUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Update a given user.
 */
class UsersIdUpdate extends Request
{
    /**
     * The user to update
     *
     * @var UserUpdate
     */
    protected ?UserUpdate $user = null;
    protected array $body = array('user');
    protected array $validations = array('user' => array('required'));
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
    /**
     * Getter for user
     *
     * @return UserUpdate The user to update
     */
    public function getUser() : ?UserUpdate
    {
        return $this->user;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('user' => new ClassSerializer(self::class, 'user', UserUpdate::class));
    }
}