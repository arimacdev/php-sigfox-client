<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Minimal information about a provider
 */
class MinProvider extends Definition
{
    /**
     * The provider identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The provider name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The provider identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The provider identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The provider name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The provider name
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