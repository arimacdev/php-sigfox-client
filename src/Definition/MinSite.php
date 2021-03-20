<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
class MinSite
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The site's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
    /**
     * @param string id The site's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The site's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The site's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The site's name
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