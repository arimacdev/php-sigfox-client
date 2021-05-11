<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'time', 'int'), new PrimitiveSerializer(self::class, 'valid', 'bool'));
    /**
     * Setter for time
     *
     * @param int $time Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setTime(?int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    public function getTime() : int
    {
        return $this->time;
    }
    /**
     * Setter for valid
     *
     * @param bool $valid true, if a valid estimation for this message is available (GPS or RSSI)
     *
     * @return self To use in method chains
     */
    public function setValid(?bool $valid) : self
    {
        $this->valid = $valid;
        return $this;
    }
    /**
     * Getter for valid
     *
     * @return bool true, if a valid estimation for this message is available (GPS or RSSI)
     */
    public function getValid() : bool
    {
        return $this->valid;
    }
}