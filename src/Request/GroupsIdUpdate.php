<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CommonGroupUpdate;
/**
 * Update a given group.
 * 
 */
class GroupsIdUpdate extends Definition
{
    /**
     * The group to update
     *
     * @var CommonGroupUpdate
     */
    protected ?CommonGroupUpdate $group = null;
    protected $serialize = array('group' => CommonGroupUpdate::class);
    protected $body = array('group');
    /**
     * Setter for group
     *
     * @param CommonGroupUpdate $group The group to update
     *
     * @return self To use in method chains
     */
    public function setGroup(?CommonGroupUpdate $group) : self
    {
        $this->group = $group;
        return $this;
    }
}