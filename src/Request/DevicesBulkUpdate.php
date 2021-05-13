<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceEditionJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Update or edit multiple devices with asynchronous job.
 */
class DevicesBulkUpdate extends Definition
{
    /**
     * The devices to edit
     *
     * @var AsynchronousDeviceEditionJob
     */
    protected ?AsynchronousDeviceEditionJob $devices = null;
    /**
     * Group Identifier use to create the devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array(new ClassSerializer(self::class, 'devices', AsynchronousDeviceEditionJob::class), new PrimitiveSerializer(self::class, 'groupId', 'string'));
    protected $query = array('groupId');
    protected $body = array('devices');
    protected $validations = array('devices' => array('required'), 'groupId' => array('required'));
    /**
     * Setter for devices
     *
     * @param AsynchronousDeviceEditionJob $devices The devices to edit
     *
     * @return self To use in method chains
     */
    public function setDevices(?AsynchronousDeviceEditionJob $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to create the devices
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
}