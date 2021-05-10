<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceTypeUpdate;
/**
 * Update a given device type.
 * 
 */
class DeviceTypesIdUpdate extends Definition
{
    /**
     * The device type to update
     *
     * @var DeviceTypeUpdate
     */
    protected ?DeviceTypeUpdate $deviceType = null;
    protected $serialize = array('deviceType' => DeviceTypeUpdate::class);
    protected $body = array('deviceType');
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
}