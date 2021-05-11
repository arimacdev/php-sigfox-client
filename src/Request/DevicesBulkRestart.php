<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceActionJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Restart multiple devices with asynchronous job.
 * 
 */
class DevicesBulkRestart extends Definition
{
    /**
     * list of device's identifier (hexadecimal format)
     *
     * @var DeviceActionJob
     */
    protected ?DeviceActionJob $devices = null;
    /**
     * Group Identifier use to restart multiple devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array(new ClassSerializer(self::class, 'devices', DeviceActionJob::class), new PrimitiveSerializer(self::class, 'groupId', 'string'));
    protected $query = array('groupId');
    protected $body = array('devices');
    protected $validations = array('devices' => array('required'), 'groupId' => array('required'));
    /**
     * Setter for devices
     *
     * @param DeviceActionJob $devices list of device's identifier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setDevices(?DeviceActionJob $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to restart multiple devices
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
}