<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create multiple new devices with asynchronous job
 */
class DevicesBulkCreate extends Request
{
    /**
     * The devices to create
     *
     * @var AsynchronousDeviceCreationJob
     */
    protected ?AsynchronousDeviceCreationJob $devices = null;
    /**
     * @internal
     */
    protected array $body = array('devices');
    /**
     * @internal
     */
    protected array $validations = array('devices' => array('required'));
    /**
     * Setter for devices
     *
     * @param AsynchronousDeviceCreationJob $devices The devices to create
     *
     * @return self To use in method chains
     */
    public function setDevices(?AsynchronousDeviceCreationJob $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Getter for devices
     *
     * @internal
     *
     * @return AsynchronousDeviceCreationJob The devices to create
     */
    public function getDevices() : ?AsynchronousDeviceCreationJob
    {
        return $this->devices;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('devices' => new ClassSerializer(AsynchronousDeviceCreationJob::class));
    }
}