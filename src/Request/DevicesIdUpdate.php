<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceUpdateJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'device', DeviceUpdateJob::class));
    protected $body = array('device');
    protected $validations = array('device' => array('required'));
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