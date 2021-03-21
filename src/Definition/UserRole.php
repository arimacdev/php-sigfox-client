<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
use Arimac\Sigfox\Definition;
/**
 * Information about User Role
 */
class UserRole extends Definition
{
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var MinProfile */
    protected ?MinProfile $profile = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup', 'profile' => '\\Arimac\\Sigfox\\Definition\\MinProfile');
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinProfile profile
     */
    function setProfile(?MinProfile $profile)
    {
        $this->profile = $profile;
    }
    /**
     * @return MinProfile profile
     */
    function getProfile() : ?MinProfile
    {
        return $this->profile;
    }
}