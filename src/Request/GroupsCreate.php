<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CommonGroupCreate;
/**
 * Create a new group.
 * 
 */
class GroupsCreate extends Definition
{
    /**
     * @var CommonGroupCreate
     */
    protected ?CommonGroupCreate $group = null;
    protected $serialize = array('group' => CommonGroupCreate::class);
    protected $body = array('group');
    /**
     * Setter for group
     *
     * @param CommonGroupCreate $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?CommonGroupCreate $group) : self
    {
        $this->group = $group;
        return $this;
    }
}