<?php

namespace Arimac\Sigfox\Definition;

class BaseMaintenance
{
    /**
     * The maintenance's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param string name The maintenance's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The maintenance's name
     */
    function getName() : string
    {
        return $this->name;
    }
}