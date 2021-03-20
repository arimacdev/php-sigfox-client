<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
/**
 * Information about User Role
 */
class UserRole
{
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinProfile */
    protected MinProfile $profile;
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinProfile profile
     */
    function setProfile(MinProfile $profile)
    {
        $this->profile = $profile;
    }
    /**
     * @return MinProfile profile
     */
    function getProfile() : MinProfile
    {
        return $this->profile;
    }
}