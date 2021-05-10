<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class DeviceActionJob extends Definition
{
    /**
     * @var string[]
     */
    protected ?array $data = null;
    /**
     * Setter for data
     *
     * @param string[] $data
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
     * @return string[]
     */
    public function getData() : array
    {
        return $this->data;
    }
}