<?php

namespace Arimac\Sigfox\Definition;

class DeviceActionJob
{
    /** @var string[] */
    protected array $data;
    /**
     * @param string[] data
     */
    function setData(array $data)
    {
        $this->data = $data;
    }
    /**
     * @return string[] data
     */
    function getData() : array
    {
        return $this->data;
    }
}