<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceTypeCreate;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new device type
 */
class DeviceTypesCreate extends Definition
{
    /**
     * The device type to create
     *
     * @var DeviceTypeCreate
     */
    protected ?DeviceTypeCreate $deviceType = null;
    protected $serialize = array(new ClassSerializer(self::class, 'deviceType', DeviceTypeCreate::class));
    protected $body = array('deviceType');
    protected $validations = array('deviceType' => array('required'));
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
}