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
    protected array $body = array('devices');
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
     * @return AsynchronousDeviceCreationJob The devices to create
     */
    public function getDevices() : ?AsynchronousDeviceCreationJob
    {
        return $this->devices;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('devices' => new ClassSerializer(self::class, 'devices', AsynchronousDeviceCreationJob::class));
    }
}