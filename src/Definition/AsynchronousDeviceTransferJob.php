<?php

namespace Arimac\Sigfox\Definition;

class AsynchronousDeviceTransferJob
{
    /**
     * The device type where new devices will be transfered
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var array */
    protected ?array $data;
    /**
     * @param string deviceTypeId The device type where new devices will be transfered
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
     * @param array data
     */
    function setData(?array $data)
    {
        $this->data = $data;
    }
    /**
     * @return array data
     */
    function getData() : ?array
    {
        return $this->data;
    }
}