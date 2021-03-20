<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\DeviceEditionBulk;
class AsynchronousDeviceEditionJob
{
    /** @var DeviceEditionBulk[] */
    protected array $data;
    /**
     * @param DeviceEditionBulk[] data
     */
    function setData(array $data)
    {
        $this->data = $data;
    }
    /**
     * @return DeviceEditionBulk[] data
     */
    function getData() : array
    {
        return $this->data;
    }
}