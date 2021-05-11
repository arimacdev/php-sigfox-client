<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new ArraySerializer(self::class, 'perms', new ClassSerializer(self::class, 'perms', MinPerm::class)), new ArraySerializer(self::class, 'path', new ClassSerializer(self::class, 'path', MinMetaRole::class)), new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    /**
     * Setter for id
     *
     * @param string $id The role's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The role's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for perms
     *
     * @param MinPerm[] $perms the permisions included in this role
     *
     * @return self To use in method chains
     */
    public function setPerms(?array $perms) : self
    {
        $this->perms = $perms;
        return $this;
    }
    /**
     * Getter for perms
     *
     * @return MinPerm[] the permisions included in this role
     */
    public function getPerms() : array
    {
        return $this->perms;
    }
    /**
     * Setter for path
     *
     * @param MinMetaRole[] $path The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @return self To use in method chains
     */
    public function setPath(?array $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Getter for path
     *
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    public function getPath() : array
    {
        return $this->path;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
}