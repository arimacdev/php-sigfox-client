<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinRole;
use Arimac\Sigfox\Definition;
class Profile extends Definition
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
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /**
     * Lists the role contained in this profile.
     *
     * @var MinRole[]
     */
    protected ?array $roles = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param string $id The profiler identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The profiler identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The profile name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The profile name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinRole[] $roles Lists the role contained in this profile.
     */
    function setRoles(?array $roles)
    {
        $this->roles = $roles;
    }
    /**
     * @return MinRole[] Lists the role contained in this profile.
     */
    function getRoles() : ?array
    {
        return $this->roles;
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