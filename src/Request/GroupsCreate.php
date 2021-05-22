<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\CommonGroupCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'group';
    /**
     * Setter for group
     *
     * @param CommonGroupCreate $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?CommonGroupCreate $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @internal
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
        $serializers = array('group' => new ClassSerializer(CommonGroupCreate::class));
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