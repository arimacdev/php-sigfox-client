<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItem;
use Arimac\Sigfox\Definition\AvailableEntitiesResponse\ClassesItem;
use Arimac\Sigfox\Definition;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse extends Definition
{
    /**
     * Array of operators infos and their forecast radio planning infos
     *
     * @var OperatorsItem[]
     */
    protected ?array $operators = null;
    /**
     * Array of device class infos.
     *
     * @var ClassesItem[]
     */
    protected ?array $classes = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param OperatorsItem[] $operators Array of operators infos and their forecast radio planning infos
     */
    function setOperators(?array $operators)
    {
        $this->operators = $operators;
    }
    /**
     * @return OperatorsItem[] Array of operators infos and their forecast radio planning infos
     */
    function getOperators() : ?array
    {
        return $this->operators;
    }
    /**
     * @param ClassesItem[] $classes Array of device class infos.
     */
    function setClasses(?array $classes)
    {
        $this->classes = $classes;
    }
    /**
     * @return ClassesItem[] Array of device class infos.
     */
    function getClasses() : ?array
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