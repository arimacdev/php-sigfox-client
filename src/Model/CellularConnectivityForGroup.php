<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Cellular connectivity configuration for a group.
 */
class CellularConnectivityForGroup extends CellularConnectivityBase
{
    /**
     * The group's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * Setter for id
     *
     * @param string $id The group's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The group's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return static To use in method chains
     */
    public function setGroup(?MinGroup $group)
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'group' => new ClassSerializer(MinGroup::class), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Child()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}