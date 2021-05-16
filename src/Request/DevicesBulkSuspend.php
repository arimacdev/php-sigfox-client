<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\DeviceActionJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Suspend multiple devices with asynchronous job
 */
class DevicesBulkSuspend extends Request
{
    /**
     * list of device's identifier (hexadecimal format)
     *
     * @var DeviceActionJob
     */
    protected ?DeviceActionJob $devices = null;
    /**
     * Group Identifier use to suspend multiple devices
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
     * Getter for devices
     *
     * @return DeviceActionJob list of device's identifier (hexadecimal format)
     */
    public function getDevices() : ?DeviceActionJob
    {
        return $this->devices;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to suspend multiple devices
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
     * @return string Group Identifier use to suspend multiple devices
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
        return array('devices' => new ClassSerializer(self::class, 'devices', DeviceActionJob::class), 'groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}