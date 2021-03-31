<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesIdPut extends Definition
{
    protected $required = array('deviceType');
    /**
     * The device type to update
     *
     * @var array
     */
    protected array $deviceType;
    protected $body = array('deviceType');
    /**
     * @param array $deviceType The device type to update
     */
    function setDeviceType(array $deviceType)
    {
        $this->deviceType = $deviceType;
    }
}