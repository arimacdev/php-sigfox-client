<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse
{
    /**
     * Array of operators infos and their forecast radio planning infos
     *
     * @var array
     */
    protected array $operators;
    /**
     * Array of device class infos.
     *
     * @var array
     */
    protected array $classes;
    /** @var Actions */
    protected Actions $actions;
    /**
     * @param array operators Array of operators infos and their forecast radio planning infos
     */
    function setOperators(array $operators)
    {
        $this->operators = $operators;
    }
    /**
     * @return array Array of operators infos and their forecast radio planning infos
     */
    function getOperators() : array
    {
        return $this->operators;
    }
    /**
     * @param array classes Array of device class infos.
     */
    function setClasses(array $classes)
    {
        $this->classes = $classes;
    }
    /**
     * @return array Array of device class infos.
     */
    function getClasses() : array
    {
        return $this->classes;
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
}