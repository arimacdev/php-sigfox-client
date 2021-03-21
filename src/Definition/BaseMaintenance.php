<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class BaseMaintenance extends Definition
{
    /**
     * The maintenance's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param string $name The maintenance's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The maintenance's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
}