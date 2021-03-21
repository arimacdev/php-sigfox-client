<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CellularConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
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
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param string $id The group's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group's identifier
     */
    function getId() : ?string
    {
        return $this->id;
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