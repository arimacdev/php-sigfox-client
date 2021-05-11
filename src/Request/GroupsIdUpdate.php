<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'group', CommonGroupUpdate::class));
    protected $body = array('group');
    protected $validations = array('group' => array('required'));
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