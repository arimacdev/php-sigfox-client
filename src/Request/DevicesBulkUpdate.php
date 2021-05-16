<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\AsynchronousDeviceEditionJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Update or edit multiple devices with asynchronous job.
 */
class DevicesBulkUpdate extends Request
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
    protected array $query = array('groupId');
    protected array $body = array('devices');
    protected array $validations = array('devices' => array('required'));
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
     * Getter for devices
     *
     * @return AsynchronousDeviceEditionJob The devices to edit
     */
    public function getDevices() : ?AsynchronousDeviceEditionJob
    {
        return $this->devices;
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
    /**
     * Getter for groupId
     *
     * @return string Group Identifier use to create the devices
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('devices' => new ClassSerializer(self::class, 'devices', AsynchronousDeviceEditionJob::class), 'groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}