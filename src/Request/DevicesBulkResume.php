<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\DeviceActionJob;
/**
 * Resume multiple devices with asynchronous job.
 * 
 */
class DevicesBulkResume extends Definition
{
    /**
     * list of device's identifier (hexadecimal format)
     *
     * @var DeviceActionJob
     */
    protected ?DeviceActionJob $devices = null;
    /**
     * Group Identifier use to resume multiple devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array('devices' => DeviceActionJob::class);
    protected $query = array('groupId');
    protected $body = array('devices');
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
     * @param string $groupId Group Identifier use to resume multiple devices
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
}