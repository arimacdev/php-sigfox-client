<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CellularConnectivityBase;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
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
    protected string $id;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The group's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group's identifier
     */
    function getId() : string
    {
        return $this->id;
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