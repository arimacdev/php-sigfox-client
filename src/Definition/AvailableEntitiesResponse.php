<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItemItem;
use Arimac\Sigfox\Definition\AvailableEntitiesResponse\ClassesItemItem;
use Arimac\Sigfox\Definition;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse extends Definition
{
    /**
     * Array of operators infos and their forecast radio planning infos
     *
     * @var AvailableEntitiesResponse\OperatorsItemItem
     */
    protected ?AvailableEntitiesResponse\OperatorsItemItem $operators = null;
    /**
     * Array of device class infos.
     *
     * @var AvailableEntitiesResponse\ClassesItemItem
     */
    protected ?AvailableEntitiesResponse\ClassesItemItem $classes = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param AvailableEntitiesResponse\OperatorsItemItem $operators Array of operators infos and their forecast radio planning infos
     */
    function setOperators(?AvailableEntitiesResponse\OperatorsItemItem $operators)
    {
        $this->operators = $operators;
    }
    /**
     * @return AvailableEntitiesResponse\OperatorsItemItem Array of operators infos and their forecast radio planning infos
     */
    function getOperators() : ?AvailableEntitiesResponse\OperatorsItemItem
    {
        return $this->operators;
    }
    /**
     * @param AvailableEntitiesResponse\ClassesItemItem $classes Array of device class infos.
     */
    function setClasses(?AvailableEntitiesResponse\ClassesItemItem $classes)
    {
        $this->classes = $classes;
    }
    /**
     * @return AvailableEntitiesResponse\ClassesItemItem Array of device class infos.
     */
    function getClasses() : ?AvailableEntitiesResponse\ClassesItemItem
    {
        return $this->classes;
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
}