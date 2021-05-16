<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\DeviceUpdateJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Update a given device.
 */
class DevicesIdUpdate extends Request
{
    /**
     * The device to update
     *
     * @var DeviceUpdateJob
     */
    protected ?DeviceUpdateJob $device = null;
    protected array $body = array('device');
    protected array $validations = array('device' => array('required'));
    /**
     * Setter for device
     *
     * @param DeviceUpdateJob $device The device to update
     *
     * @return self To use in method chains
     */
    public function setDevice(?DeviceUpdateJob $device) : self
    {
        $this->device = $device;
        return $this;
    }
    /**
     * Getter for device
     *
     * @return DeviceUpdateJob The device to update
     */
    public function getDevice() : ?DeviceUpdateJob
    {
        return $this->device;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('device' => new ClassSerializer(self::class, 'device', DeviceUpdateJob::class));
    }
}