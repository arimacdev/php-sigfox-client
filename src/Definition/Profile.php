<?php

namespace Arimac\Sigfox\Definition;

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
    protected $serialize = array('group' => MinGroup::class);
    /**
     * Setter for id
     *
     * @param string $id The profiler identifier
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
     * @return string The profiler identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The profile name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The profile name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for roles
     *
     * @param MinRole[] $roles Lists the role contained in this profile.
     *
     * @return self To use in method chains
     */
    public function setRoles(?array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * Getter for roles
     *
     * @return MinRole[] Lists the role contained in this profile.
     */
    public function getRoles() : array
    {
        return $this->roles;
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