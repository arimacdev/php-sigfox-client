<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class MinMaintenance extends Definition
{
    /**
     * The maintenance's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The maintenance's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param string $id The maintenance's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The maintenance's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
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