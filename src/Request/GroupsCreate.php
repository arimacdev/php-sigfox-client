<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'group', CommonGroupCreate::class));
    protected $body = array('group');
    protected $validations = array('group' => array('required'));
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