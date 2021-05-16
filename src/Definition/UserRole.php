<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Information about User Role
 */
class UserRole extends Definition
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
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
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
     * @return self To use in method chains
     */
    public function setProfile(?MinProfile $profile) : self
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
        return array('group' => new ClassSerializer(self::class, 'group', MinGroup::class), 'profile' => new ClassSerializer(self::class, 'profile', MinProfile::class));
    }
}