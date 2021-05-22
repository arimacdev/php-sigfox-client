<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\DeviceTypeCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Create a new device type
 */
class DeviceTypesCreate extends Request
{
    /**
     * The device type to create
     *
     * @var DeviceTypeCreate
     */
    protected ?DeviceTypeCreate $deviceType = null;
    /**
     * @internal
     */
    protected ?string $body = 'deviceType';
    /**
     * Setter for deviceType
     *
     * @param DeviceTypeCreate $deviceType The device type to create
     *
     * @return static To use in method chains
     */
    public function setDeviceType(?DeviceTypeCreate $deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
     *
     * @internal
     *
     * @return DeviceTypeCreate The device type to create
     */
    public function getDeviceType() : ?DeviceTypeCreate
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
        $serializers = array('deviceType' => new ClassSerializer(DeviceTypeCreate::class));
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