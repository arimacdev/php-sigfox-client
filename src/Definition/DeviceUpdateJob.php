<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceUpdateJob
{
    use SingleDeviceFields;
    /**
     * The device's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param string $name The device's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The device's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
}