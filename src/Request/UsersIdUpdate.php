<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\UserUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    /**
     * @internal
     */
    protected ?string $body = 'user';
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
     * @internal
     *
     * @return UserUpdate The user to update
     */
    public function getUser() : ?UserUpdate
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
        $serializers = array('user' => new ClassSerializer(UserUpdate::class));
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