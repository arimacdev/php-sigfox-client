<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create multiple new devices with asynchronous job
 * 
 */
class DevicesBulkCreate extends Definition
{
    /**
     * The devices to create
     *
     * @var AsynchronousDeviceCreationJob
     */
    protected ?AsynchronousDeviceCreationJob $devices = null;
    protected $serialize = array(new ClassSerializer(self::class, 'devices', AsynchronousDeviceCreationJob::class));
    protected $body = array('devices');
    protected $validations = array('devices' => array('required'));
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
}