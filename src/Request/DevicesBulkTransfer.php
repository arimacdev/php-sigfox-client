<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Transfer multiple devices to another device type with asynchronous job
 * 
 */
class DevicesBulkTransfer extends Definition
{
    /**
     * The devices to move
     *
     * @var AsynchronousDeviceTransferJob
     */
    protected ?AsynchronousDeviceTransferJob $devices = null;
    protected $serialize = array(new ClassSerializer(self::class, 'devices', AsynchronousDeviceTransferJob::class));
    protected $body = array('devices');
    protected $validations = array('devices' => array('required'));
    /**
     * Setter for devices
     *
     * @param AsynchronousDeviceTransferJob $devices The devices to move
     *
     * @return self To use in method chains
     */
    public function setDevices(?AsynchronousDeviceTransferJob $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
}