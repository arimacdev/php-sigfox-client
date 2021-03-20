<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseHost;
class HostCreation extends BaseHost
{
    /**
     * identifier of the group of this host
     *
     * @var string
     */
    protected string $groupId;
    /**
     * @param string groupId identifier of the group of this host
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string identifier of the group of this host
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
}