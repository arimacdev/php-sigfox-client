<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\DeviceTypeUpdate;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected array $body = array('deviceType');
    protected array $validations = array('deviceType' => array('required'));
    /**
     * Setter for deviceType
     *
     * @param DeviceTypeUpdate $deviceType The device type to update
     *
     * @return self To use in method chains
     */
    public function setDeviceType(?DeviceTypeUpdate $deviceType) : self
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
     *
     * @return DeviceTypeUpdate The device type to update
     */
    public function getDeviceType() : ?DeviceTypeUpdate
    {
        return $this->deviceType;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('deviceType' => new ClassSerializer(self::class, 'deviceType', DeviceTypeUpdate::class));
    }
}