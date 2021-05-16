<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new group.
 */
class GroupsCreate extends Request
{
    /**
     * @var CommonGroupCreate
     */
    protected ?CommonGroupCreate $group = null;
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
     * @param CommonGroupCreate $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?CommonGroupCreate $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return CommonGroupCreate
     */
    public function getGroup() : ?CommonGroupCreate
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
        return array('group' => new ClassSerializer(self::class, 'group', CommonGroupCreate::class));
    }
}