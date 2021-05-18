<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    /**
     * @internal
     */
    protected array $body = array('devices');
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
     * @internal
     *
     * @return AsynchronousDeviceTransferJob The devices to move
     */
    public function getDevices() : ?AsynchronousDeviceTransferJob
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
        $serializers = array('devices' => new ClassSerializer(AsynchronousDeviceTransferJob::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('devices' => array(new Required(), new Child()));
        return $rules;
    }
}