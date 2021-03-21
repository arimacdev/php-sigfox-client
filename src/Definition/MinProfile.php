<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a profile entity
 */
class MinProfile extends Definition
{
    /**
     * The profile's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The profile's name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The profile's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The profile's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The profile's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The profile's name
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