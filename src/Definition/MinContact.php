<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a contact entity
 */
class MinContact extends Definition
{
    /**
     * The contact's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The contact's name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The contact's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The contact's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The contact's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The contact's name
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