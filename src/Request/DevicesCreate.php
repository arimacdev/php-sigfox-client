<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceCreationJob;
/**
 * Create a new device.
 * 
 */
class DevicesCreate extends Definition
{
    /**
     * The device to create
     *
     * @var DeviceCreationJob
     */
    protected ?DeviceCreationJob $device = null;
    protected $serialize = array('device' => DeviceCreationJob::class);
    protected $body = array('device');
    /**
     * Setter for device
     *
     * @param DeviceCreationJob $device The device to create
     *
     * @return self To use in method chains
     */
    public function setDevice(?DeviceCreationJob $device) : self
    {
        $this->device = $device;
        return $this;
    }
}