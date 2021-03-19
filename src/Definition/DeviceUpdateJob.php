<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceUpdateJob extends SingleDeviceFields
{
    /**
     * The device's name
     *
     * @var string
     */
    protected string $name;
}