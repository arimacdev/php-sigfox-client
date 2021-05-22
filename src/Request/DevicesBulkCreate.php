<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'devices';
    /**
     * Setter for devices
     *
     * @param AsynchronousDeviceCreationJob $devices The devices to create
     *
     * @return static To use in method chains
     */
    public function setDevices(?AsynchronousDeviceCreationJob $devices)
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
        $serializers = array('devices' => new ClassSerializer(AsynchronousDeviceCreationJob::class));
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