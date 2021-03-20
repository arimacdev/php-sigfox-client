<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceEditionBulk extends SingleDeviceFields
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected string $id;
    /**
     * The name of the device
     *
     * @var string
     */
    protected ?string $name;
    /**
     * @param string id The device's identifier (hexadecimal format)
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
     * @param string name The name of the device
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The name of the device
     */
    function getName() : ?string
    {
        return $this->name;
    }
}