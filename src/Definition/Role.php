<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonRole;
use Arimac\Sigfox\Definition\MinPerm;
use Arimac\Sigfox\Definition\MinMetaRole;
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
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    /**
     * @param string $id The role's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The role's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param MinPerm[] $perms the permisions included in this role
     */
    function setPerms(?array $perms)
    {
        $this->perms = $perms;
    }
    /**
     * @return MinPerm[] the permisions included in this role
     */
    function getPerms() : ?array
    {
        return $this->perms;
    }
    /**
     * @param MinMetaRole[] $path The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function setPath(?array $path)
    {
        $this->path = $path;
    }
    /**
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function getPath() : ?array
    {
        return $this->path;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param string[] resources
     */
    function setResources(?array $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return string[] resources
     */
    function getResources() : ?array
    {
        return $this->resources;
    }
}