<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceCreationJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected $serialize = array(new ClassSerializer(self::class, 'device', DeviceCreationJob::class));
    protected $body = array('device');
    protected $validations = array('device' => array('required'));
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