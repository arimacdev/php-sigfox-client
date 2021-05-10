<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class HostCreation extends BaseHost
{
    /**
     * identifier of the group of this host
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId identifier of the group of this host
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
     * @return string identifier of the group of this host
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
}