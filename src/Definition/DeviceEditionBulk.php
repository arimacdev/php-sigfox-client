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
}