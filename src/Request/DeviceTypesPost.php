<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesPost extends Definition
{
    protected $required = array('deviceType');
    /**
     * The device type to create
     *
     * @var array
     */
    protected array $deviceType;
    protected $body = array('deviceType');
    /**
     * @param array $deviceType The device type to create
     */
    function setDeviceType(array $deviceType)
    {
        $this->deviceType = $deviceType;
    }
}