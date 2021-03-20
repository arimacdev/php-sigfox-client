<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStation
{
    /**
     * The base station identifier in hexadecimal
     *
     * @var string
     */
    protected string $id;
    /**
     * The base station name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
    /**
     * @param string id The base station identifier in hexadecimal
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The base station identifier in hexadecimal
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The base station name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The base station name
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
}