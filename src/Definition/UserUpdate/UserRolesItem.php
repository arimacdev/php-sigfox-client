<?php

namespace Arimac\Sigfox\Definition\UserUpdate;

use Arimac\Sigfox\Definition;
class UserRolesItem extends Definition
{
    protected $required = array('groupId', 'profileId');
    /**
     * The group identifier on which the user will have the permissions set
     *
     * @var string
     */
    protected string $groupId;
    /**
     * The profile identifier giving permissions to the user
     *
     * @var string
     */
    protected string $profileId;
    /**
     * @param string $groupId The group identifier on which the user will have the permissions set
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string The group identifier on which the user will have the permissions set
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * @param string $profileId The profile identifier giving permissions to the user
     */
    function setProfileId(string $profileId)
    {
        $this->profileId = $profileId;
    }
    /**
     * @return string The profile identifier giving permissions to the user
     */
    function getProfileId() : string
    {
        return $this->profileId;
    }
}