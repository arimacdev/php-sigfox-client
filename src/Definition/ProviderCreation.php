<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseProvider;
class ProviderCreation extends BaseProvider
{
    /**
     * identifier of the group of this provider
     *
     * @var string
     */
    protected string $groupId;
    /**
     * @param string groupId identifier of the group of this provider
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string identifier of the group of this provider
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
}