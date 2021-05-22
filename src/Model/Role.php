<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Information about a Role
 */
class Role extends CommonRole
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * the permisions included in this role
     *
     * @var MinPerm[]
     */
    protected ?array $perms = null;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected ?array $path = null;
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
     * @param string $id The role's identifier
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
     * @return string The role's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for perms
     *
     * @param MinPerm[] $perms the permisions included in this role
     *
     * @return static To use in method chains
     */
    public function setPerms(?array $perms)
    {
        $this->perms = $perms;
        return $this;
    }
    /**
     * Getter for perms
     *
     * @return MinPerm[] the permisions included in this role
     */
    public function getPerms() : ?array
    {
        return $this->perms;
    }
    /**
     * Setter for path
     *
     * @param MinMetaRole[] $path The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @return static To use in method chains
     */
    public function setPath(?array $path)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Getter for path
     *
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    public function getPath() : ?array
    {
        return $this->path;
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'perms' => new ArraySerializer(new ClassSerializer(MinPerm::class)), 'path' => new ArraySerializer(new ClassSerializer(MinMetaRole::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
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
        $rules = array('perms' => array(new ChildSet()), 'path' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}