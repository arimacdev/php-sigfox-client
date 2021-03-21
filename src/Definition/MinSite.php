<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class MinSite extends Definition
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The site's name
     *
     * @var string
     */
    protected ?string $name = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $id The site's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The site's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name The site's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The site's name
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