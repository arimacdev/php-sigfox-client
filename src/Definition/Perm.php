<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Information about a Permission
 */
class Perm
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected int $code;
    /**
     * The permission's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The permission's description (in english)
     *
     * @var string
     */
    protected string $description;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param int code The permission's code
     */
    function setCode(int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int The permission's code
     */
    function getCode() : int
    {
        return $this->code;
    }
    /**
     * @param string name The permission's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The permission's name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string description The permission's description (in english)
     */
    function setDescription(string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The permission's description (in english)
     */
    function getDescription() : string
    {
        return $this->description;
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
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}