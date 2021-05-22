<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'device';
    /**
     * Setter for device
     *
     * @param DeviceCreationJob $device The device to create
     *
     * @return static To use in method chains
     */
    public function setDevice(?DeviceCreationJob $device)
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
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('device' => array(new Required(), new Child()));
        return $rules;
    }
}