<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesBulkPost extends Definition
{
    protected $required = array('devices');
    /**
     * array of device's identifier (hexadecimal format) with unsubscribtion time
     *
     * @var array
     */
    protected array $devices;
    /**
     * Group Identifier use to unsubscribe multiple devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $body = array('devices');
    protected $query = array('groupId');
    /**
     * @param array $devices array of device's identifier (hexadecimal format) with unsubscribtion time
     */
    function setDevices(array $devices)
    {
        $this->devices = $devices;
    }
    /**
     * @param string $groupId Group Identifier use to unsubscribe multiple devices
     */
    function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
    }
}