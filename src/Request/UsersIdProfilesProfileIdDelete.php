<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class UsersIdProfilesProfileIdDelete extends Definition
{
    /**
     * The group identifier
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $query = array('groupId');
    /**
     * @param string $groupId The group identifier
     */
    function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
    }
}