<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\DeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new device.
 */
class DevicesCreate extends Request
{
    /**
     * The device to create
     *
     * @var DeviceCreationJob
     */
    protected ?DeviceCreationJob $device = null;
    /**
     * @internal
     */
    protected array $body = array('device');
    /**
     * @internal
     */
    protected array $validations = array('device' => array('required'));
    /**
     * Setter for device
     *
     * @param DeviceCreationJob $device The device to create
     *
     * @return self To use in method chains
     */
    public function setDevice(?DeviceCreationJob $device) : self
    {
        $this->device = $device;
        return $this;
    }
    /**
     * Getter for device
     *
     * @internal
     *
     * @return DeviceCreationJob The device to create
     */
    public function getDevice() : ?DeviceCreationJob
    {
        return $this->device;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('device' => new ClassSerializer(DeviceCreationJob::class));
        return $serializers;
    }
}