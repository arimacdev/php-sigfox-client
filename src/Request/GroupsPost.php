<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class GroupsPost extends Definition
{
    protected $required = array('group');
    /** @var array */
    protected array $group;
    protected $body = array('group');
    /**
     * @param array group
     */
    function setGroup(array $group)
    {
        $this->group = $group;
    }
}