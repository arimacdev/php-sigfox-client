<?php

namespace Arimac\Sigfox\Model\UserUpdate;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
class UserRolesItem extends Model
{
    /**
     * The group identifier on which the user will have the permissions set
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * The profile identifier giving permissions to the user
     *
     * @var string
     */
    protected ?string $profileId = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId The group identifier on which the user will have the permissions set
     *
     * @return static To use in method chains
     */
    public function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The group identifier on which the user will have the permissions set
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for profileId
     *
     * @param string $profileId The profile identifier giving permissions to the user
     *
     * @return static To use in method chains
     */
    public function setProfileId(?string $profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * Getter for profileId
     *
     * @return string The profile identifier giving permissions to the user
     */
    public function getProfileId() : ?string
    {
        return $this->profileId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('groupId' => new PrimitiveSerializer('string'), 'profileId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('groupId' => array(new Required()), 'profileId' => array(new Required()));
        return $rules;
    }
}