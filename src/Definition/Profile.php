<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinRole;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
class Profile
{
    /**
     * The profiler identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The profile name
     *
     * @var string
     */
    protected string $name;
    /** @var MinGroup */
    protected MinGroup $group;
    /**
     * Lists the role contained in this profile.
     *
     * @var MinRole[]
     */
    protected array $roles;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The profiler identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The profiler identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The profile name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The profile name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinRole[] roles Lists the role contained in this profile.
     */
    function setRoles(array $roles)
    {
        $this->roles = $roles;
    }
    /**
     * @return MinRole[] Lists the role contained in this profile.
     */
    function getRoles() : array
    {
        return $this->roles;
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