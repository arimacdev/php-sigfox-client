<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class BaseHost extends Definition
{
    /**
     * The host's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param string $name The host's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The host's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
}