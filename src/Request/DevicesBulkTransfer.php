<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Transfer multiple devices to another device type with asynchronous job
 */
class DevicesBulkTransfer extends Request
{
    /**
     * The devices to move
     *
     * @var AsynchronousDeviceTransferJob
     */
    protected ?AsynchronousDeviceTransferJob $devices = null;
    protected array $body = array('devices');
    protected array $validations = array('devices' => array('required'));
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
    /**
     * Getter for devices
     *
     * @return AsynchronousDeviceTransferJob The devices to move
     */
    public function getDevices() : ?AsynchronousDeviceTransferJob
    {
        return $this->devices;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('devices' => new ClassSerializer(self::class, 'devices', AsynchronousDeviceTransferJob::class));
    }
}