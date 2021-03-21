<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the device's common properties for reading or creation (not update)
 */
class CommonDevice extends Definition
{
    protected $required = array('id', 'name');
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected string $id;
    /**
     * The device's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param string $id The device's identifier (hexadecimal format)
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device's identifier (hexadecimal format)
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string $name The device's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The device's name
     */
    function getName() : string
    {
        return $this->name;
    }
}