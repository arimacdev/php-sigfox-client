<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;
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
    protected $serialize = array('devices' => AsynchronousDeviceTransferJob::class);
    protected $body = array('devices');
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