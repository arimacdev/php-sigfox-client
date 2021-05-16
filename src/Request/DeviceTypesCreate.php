<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\DeviceTypeCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected array $body = array('deviceType');
    /**
     * @internal
     */
    protected array $validations = array('deviceType' => array('required'));
    /**
     * Setter for deviceType
     *
     * @param DeviceTypeCreate $deviceType The device type to create
     *
     * @return self To use in method chains
     */
    public function setDeviceType(?DeviceTypeCreate $deviceType) : self
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
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
        return array('deviceType' => new ClassSerializer(self::class, 'deviceType', DeviceTypeCreate::class));
    }
}