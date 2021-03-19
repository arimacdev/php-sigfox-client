<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the position of the device
 */
class DeviceLocation
{
    /**
     * The device's estimated latitude
     */
    protected int $lat;
    /**
     * The device's estimated longitude
     */
    protected int $lng;
}