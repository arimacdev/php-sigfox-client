<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\UserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    /**
     * @internal
     */
    protected array $body = array('user');
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
     * @internal
     *
     * @return UserCreation The user to create
     */
    public function getUser() : ?UserCreation
    {
        return $this->user;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('user' => new ClassSerializer(UserCreation::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('user' => array(new Required(), new Child()));
        return $rules;
    }
}