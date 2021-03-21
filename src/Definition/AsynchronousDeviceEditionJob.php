<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\DeviceEditionBulk;
use Arimac\Sigfox\Definition;
class AsynchronousDeviceEditionJob extends Definition
{
    protected $required = array('data');
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