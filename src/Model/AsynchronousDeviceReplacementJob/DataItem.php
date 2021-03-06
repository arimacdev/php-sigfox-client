<?php

namespace Arimac\Sigfox\Model\AsynchronousDeviceReplacementJob;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DataItem extends Model
{
    /**
     * The device's identifier to replace (hexadecimal format)
     *
     * @var string
     */
    protected ?string $deviceId = null;
    /**
     * The target device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $targetDeviceId = null;
    /**
     * Setter for deviceId
     *
     * @param string $deviceId The device's identifier to replace (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setDeviceId(?string $deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }
    /**
     * Getter for deviceId
     *
     * @return string The device's identifier to replace (hexadecimal format)
     */
    public function getDeviceId() : ?string
    {
        return $this->deviceId;
    }
    /**
     * Setter for targetDeviceId
     *
     * @param string $targetDeviceId The target device's identifier (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setTargetDeviceId(?string $targetDeviceId)
    {
        $this->targetDeviceId = $targetDeviceId;
        return $this;
    }
    /**
     * Getter for targetDeviceId
     *
     * @return string The target device's identifier (hexadecimal format)
     */
    public function getTargetDeviceId() : ?string
    {
        return $this->targetDeviceId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceId' => new PrimitiveSerializer('string'), 'targetDeviceId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}