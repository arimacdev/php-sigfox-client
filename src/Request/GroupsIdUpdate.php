<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Update a given group.
 */
class GroupsIdUpdate extends Request
{
    /**
     * The group to update
     *
     * @var CommonGroupUpdate
     */
    protected ?CommonGroupUpdate $group = null;
    /**
     * @internal
     */
    protected array $body = array('group');
    /**
     * @internal
     */
    protected array $validations = array('group' => array('required'));
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
    /**
     * Getter for group
     *
     * @return CommonGroupUpdate The group to update
     */
    public function getGroup() : ?CommonGroupUpdate
    {
        return $this->group;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('group' => new ClassSerializer(self::class, 'group', CommonGroupUpdate::class));
    }
}