<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob\DataItem;
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
    /** @var DataItem[] */
    protected ?array $data = null;
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
     * @param DataItem[] data
     */
    function setData(?array $data)
    {
        $this->data = $data;
    }
    /**
     * @return DataItem[] data
     */
    function getData() : ?array
    {
        return $this->data;
    }
}