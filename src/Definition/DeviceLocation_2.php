<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ComputedLocation;
class DeviceLocation_2 extends ComputedLocation
{
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
    /**
     * true, if a valid estimation for this message is available (GPS or RSSI)
     *
     * @var bool
     */
    protected bool $valid;
}