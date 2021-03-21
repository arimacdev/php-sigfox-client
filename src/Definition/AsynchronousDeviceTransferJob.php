<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob\DataItemItem;
use Arimac\Sigfox\Definition;
class AsynchronousDeviceTransferJob extends Definition
{
    protected $required = array('deviceTypeId');
    /**
     * The device type where new devices will be transfered
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var AsynchronousDeviceTransferJob\DataItemItem */
    protected ?AsynchronousDeviceTransferJob\DataItemItem $data = null;
    /**
     * @param string $deviceTypeId The device type where new devices will be transfered
     */
    function setDeviceTypeId(string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @return string The device type where new devices will be transfered
     */
    function getDeviceTypeId() : string
    {
        return $this->deviceTypeId;
    }
    /**
     * @param AsynchronousDeviceTransferJob\DataItemItem data
     */
    function setData(?AsynchronousDeviceTransferJob\DataItemItem $data)
    {
        $this->data = $data;
    }
    /**
     * @return AsynchronousDeviceTransferJob\DataItemItem data
     */
    function getData() : ?AsynchronousDeviceTransferJob\DataItemItem
    {
        return $this->data;
    }
}