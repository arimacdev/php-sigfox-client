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
        return array('deviceType' => new ClassSerializer(DeviceTypeUpdate::class));
    }
}