<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Information about User Role
 */
class UserRole extends Model
{
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var MinProfile
     */
    protected ?MinProfile $profile = null;
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?MinGroup $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for profile
     *
     * @param MinProfile $profile
     *
     * @return static To use in method chains
     */
    public function setProfile(?MinProfile $profile)
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * Getter for profile
     *
     * @return MinProfile
     */
    public function getProfile() : ?MinProfile
    {
        return $this->profile;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('group' => new ClassSerializer(MinGroup::class), 'profile' => new ClassSerializer(MinProfile::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Child()), 'profile' => array(new Child()));
        return $rules;
    }
}