<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\BulkUnsubscribe;
/**
 * Unsubscribe multiple devices with asynchronous job.
 * 
 */
class DevicesBulkUnsubscribe extends Definition
{
    /**
     * array of device's identifier (hexadecimal format) with unsubscribtion time
     *
     * @var BulkUnsubscribe
     */
    protected ?BulkUnsubscribe $devices = null;
    /**
     * Group Identifier use to unsubscribe multiple devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array('devices' => BulkUnsubscribe::class);
    protected $query = array('groupId');
    protected $body = array('devices');
    /**
     * Setter for devices
     *
     * @param BulkUnsubscribe $devices array of device's identifier (hexadecimal format) with unsubscribtion time
     *
     * @return self To use in method chains
     */
    public function setDevices(?BulkUnsubscribe $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to unsubscribe multiple devices
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
}