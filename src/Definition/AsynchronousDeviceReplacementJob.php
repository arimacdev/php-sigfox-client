<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob\DataItem;
use Arimac\Sigfox\Definition;
class AsynchronousDeviceReplacementJob extends Definition
{
    /** @var DataItem[] */
    protected ?array $data = null;
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