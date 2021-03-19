<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the position of the device
 */
class DeviceLocation
{
    /**
     * The device's estimated latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * The device's estimated longitude
     *
     * @var int
     */
    protected int $lng;
}