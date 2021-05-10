<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceUpdateJob;
/**
 * Update a given device.
 * 
 */
class DevicesIdUpdate extends Definition
{
    /**
     * The device to update
     *
     * @var DeviceUpdateJob
     */
    protected ?DeviceUpdateJob $device = null;
    protected $serialize = array('device' => DeviceUpdateJob::class);
    protected $body = array('device');
    /**
     * Setter for device
     *
     * @param DeviceUpdateJob $device The device to update
     *
     * @return self To use in method chains
     */
    public function setDevice(?DeviceUpdateJob $device) : self
    {
        $this->device = $device;
        return $this;
    }
}