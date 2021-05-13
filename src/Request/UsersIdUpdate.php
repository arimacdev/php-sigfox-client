<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\UserUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Update a given user.
 */
class UsersIdUpdate extends Definition
{
    /**
     * The user to update
     *
     * @var UserUpdate
     */
    protected ?UserUpdate $user = null;
    protected $serialize = array(new ClassSerializer(self::class, 'user', UserUpdate::class));
    protected $body = array('user');
    protected $validations = array('user' => array('required'));
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