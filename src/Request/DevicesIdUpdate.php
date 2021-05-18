<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Update a given device.
 */
class DevicesIdUpdate extends Request
{
    /**
     * The device to update
     *
     * @var DeviceUpdateJob
     */
    protected ?DeviceUpdateJob $device = null;
    /**
     * @internal
     */
    protected array $body = array('device');
    /**
     * Setter for device
     *
     * @param DeviceUpdateJob $device The device to update
     *
     * @return self To use in method chains
     */
    public function setDevice(?DeviceUpdateJob $device) : self
    {
        $this->device = $device;
        return $this;
    }
    /**
     * Getter for device
     *
     * @internal
     *
     * @return DeviceUpdateJob The device to update
     */
    public function getDevice() : ?DeviceUpdateJob
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
        $serializers = array('device' => new ClassSerializer(DeviceUpdateJob::class));
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