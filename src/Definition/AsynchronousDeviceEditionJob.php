<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class AsynchronousDeviceEditionJob extends Definition
{
    /**
     * @var DeviceEditionBulk[]
     */
    protected ?array $data = null;
    /**
     * Setter for data
     *
     * @param DeviceEditionBulk[] $data
     *
     * @return self To use in method chains
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return DeviceEditionBulk[]
     */
    public function getData() : array
    {
        return $this->data;
    }
}