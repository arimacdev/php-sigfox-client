<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class Profile extends Model
{
    /**
     * The profiler identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The profile name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * Lists the role contained in this profile.
     *
     * @var MinRole[]
     */
    protected ?array $roles = null;
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
     * @param string $id The profiler identifier
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
     * @return string The profiler identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The profile name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The profile name
     */
    public function getName() : ?string
    {
        return $this->name;
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
     * Setter for roles
     *
     * @param MinRole[] $roles Lists the role contained in this profile.
     *
     * @return static To use in method chains
     */
    public function setRoles(?array $roles)
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * Getter for roles
     *
     * @return MinRole[] Lists the role contained in this profile.
     */
    public function getRoles() : ?array
    {
        return $this->roles;
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'group' => new ClassSerializer(MinGroup::class), 'roles' => new ArraySerializer(new ClassSerializer(MinRole::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('group' => array(new Child()), 'roles' => array(new ChildSet()));
        return $rules;
    }
}