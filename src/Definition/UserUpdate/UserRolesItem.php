<?php

namespace Arimac\Sigfox\Definition\UserUpdate;

use Arimac\Sigfox\Definition;
class UserRolesItem extends Definition
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
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The group identifier on which the user will have the permissions set
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * Setter for profileId
     *
     * @param string $profileId The profile identifier giving permissions to the user
     *
     * @return self To use in method chains
     */
    public function setProfileId(?string $profileId) : self
    {
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * Getter for profileId
     *
     * @return string The profile identifier giving permissions to the user
     */
    public function getProfileId() : string
    {
        return $this->profileId;
    }
}