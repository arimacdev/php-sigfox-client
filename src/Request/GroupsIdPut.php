<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class GroupsIdPut extends Definition
{
    protected $required = array('group');
    /**
     * The group to update
     *
     * @var array
     */
    protected array $group;
    protected $body = array('group');
    /**
     * @param array $group The group to update
     */
    function setGroup(array $group)
    {
        $this->group = $group;
    }
}