<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Information about a Permission
 */
class Perm extends Definition
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected ?int $code = null;
    /**
     * The permission's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The permission's description (in english)
     *
     * @var string
     */
    protected ?string $description = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    /**
     * @param int $code The permission's code
     */
    function setCode(?int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int The permission's code
     */
    function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * @param string $name The permission's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The permission's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $description The permission's description (in english)
     */
    function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The permission's description (in english)
     */
    function getDescription() : ?string
    {
        return $this->description;
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