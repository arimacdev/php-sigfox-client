<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonRole;
use Arimac\Sigfox\Definition\MinPerm;
use Arimac\Sigfox\Definition\MinMetaRole;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
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
    protected string $id;
    /**
     * the permisions included in this role
     *
     * @var MinPerm[]
     */
    protected array $perms;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected array $path;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The role's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The role's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param MinPerm[] perms the permisions included in this role
     */
    function setPerms(array $perms)
    {
        $this->perms = $perms;
    }
    /**
     * @return MinPerm[] the permisions included in this role
     */
    function getPerms() : array
    {
        return $this->perms;
    }
    /**
     * @param MinMetaRole[] path The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function setPath(array $path)
    {
        $this->path = $path;
    }
    /**
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    function getPath() : array
    {
        return $this->path;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}