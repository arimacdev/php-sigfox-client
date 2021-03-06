<?php

namespace Arimac\Sigfox\Model;

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
    /**
     * Setter for time
     *
     * @param int $time Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setTime(?int $time)
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * Setter for valid
     *
     * @param bool $valid true, if a valid estimation for this message is available (GPS or RSSI)
     *
     * @return static To use in method chains
     */
    public function setValid(?bool $valid)
    {
        $this->valid = $valid;
        return $this;
    }
    /**
     * Getter for valid
     *
     * @return bool true, if a valid estimation for this message is available (GPS or RSSI)
     */
    public function getValid() : ?bool
    {
        return $this->valid;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('time' => new PrimitiveSerializer('int'), 'valid' => new PrimitiveSerializer('bool'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}