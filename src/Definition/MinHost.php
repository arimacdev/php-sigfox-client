<?php

namespace Arimac\Sigfox\Definition;

class MinHost
{
    /**
     * The host's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The host's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param string id The host's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The host's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The host's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The host's name
     */
    function getName() : string
    {
        return $this->name;
    }
}