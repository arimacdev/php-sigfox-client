<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Minimal information about a provider
 */
class MinProvider
{
    /**
     * The provider identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The provider name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
    /**
     * @param string id The provider identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The provider identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The provider name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The provider name
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