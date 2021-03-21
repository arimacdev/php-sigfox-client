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
    protected ?int $time = null;
    /**
     * true, if a valid estimation for this message is available (GPS or RSSI)
     *
     * @var bool
     */
    protected ?bool $valid = null;
    /**
     * @param int $time Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @param bool $valid true, if a valid estimation for this message is available (GPS or RSSI)
     */
    function setValid(?bool $valid)
    {
        $this->valid = $valid;
    }
    /**
     * @return bool true, if a valid estimation for this message is available (GPS or RSSI)
     */
    function getValid() : ?bool
    {
        return $this->valid;
    }
}