<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a minimum contract info entity
 */
class MinContractInfo extends Definition
{
    /**
     * The contract info's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The contract info's name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    /**
     * @param string $id The contract info's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The contract info's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The contract info's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The contract info's name
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