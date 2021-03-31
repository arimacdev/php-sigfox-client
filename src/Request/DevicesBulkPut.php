<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesBulkPut extends Definition
{
    protected $required = array('devices');
    /**
     * The devices to edit
     *
     * @var array
     */
    protected array $devices;
    /**
     * Group Identifier use to create the devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $body = array('devices');
    protected $query = array('groupId');
    /**
     * @param array $devices The devices to edit
     */
    function setDevices(array $devices)
    {
        $this->devices = $devices;
    }
    /**
     * @param string $groupId Group Identifier use to create the devices
     */
    function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
    }
}