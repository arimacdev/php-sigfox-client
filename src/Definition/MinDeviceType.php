<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines a minimum contract info entity
 */
class MinDeviceType
{
    /**
     * The device type info's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The device type info's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The device type info's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device type info's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The device type info's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The device type info's name
     */
    function getName() : string
    {
        return $this->name;
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