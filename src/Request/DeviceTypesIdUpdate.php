<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\DeviceTypeUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Update a given device type.
 */
class DeviceTypesIdUpdate extends Request
{
    /**
     * The device type to update
     *
     * @var DeviceTypeUpdate
     */
    protected ?DeviceTypeUpdate $deviceType = null;
    /**
     * @internal
     */
    protected ?string $body = 'deviceType';
    /**
     * Setter for deviceType
     *
     * @param DeviceTypeUpdate $deviceType The device type to update
     *
     * @return static To use in method chains
     */
    public function setDeviceType(?DeviceTypeUpdate $deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
     *
     * @internal
     *
     * @return DeviceTypeUpdate The device type to update
     */
    public function getDeviceType() : ?DeviceTypeUpdate
    {
        return $this->deviceType;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceType' => new ClassSerializer(DeviceTypeUpdate::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('deviceType' => array(new Required(), new Child()));
        return $rules;
    }
}