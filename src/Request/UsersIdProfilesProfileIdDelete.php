<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Delete profiles or a given profile associated to the groupId
 * 
 */
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
     * Setter for groupId
     *
     * @param string $groupId The group identifier
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
}