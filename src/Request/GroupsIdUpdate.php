<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\CommonGroupUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'group';
    /**
     * Setter for group
     *
     * @param CommonGroupUpdate $group The group to update
     *
     * @return static To use in method chains
     */
    public function setGroup(?CommonGroupUpdate $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @internal
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
        $serializers = array('group' => new ClassSerializer(CommonGroupUpdate::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Required(), new Child()));
        return $rules;
    }
}