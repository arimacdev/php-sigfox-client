<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesPost extends Definition
{
    protected $required = array('device');
    /**
     * The device to create
     *
     * @var array
     */
    protected array $device;
    protected $body = array('device');
    /**
     * @param array $device The device to create
     */
    function setDevice(array $device)
    {
        $this->device = $device;
    }
}