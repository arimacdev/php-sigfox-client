<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStation extends Definition
{
    /**
     * The base station identifier in hexadecimal
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The base station name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The base station identifier in hexadecimal
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The base station identifier in hexadecimal
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The base station name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The base station name
     */
    function getName() : ?string
    {
        return $this->name;
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