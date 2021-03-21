<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob\DataItemItem;
use Arimac\Sigfox\Definition;
class AsynchronousDeviceReplacementJob extends Definition
{
    /** @var AsynchronousDeviceReplacementJob\DataItemItem */
    protected ?AsynchronousDeviceReplacementJob\DataItemItem $data = null;
    /**
     * @param AsynchronousDeviceReplacementJob\DataItemItem data
     */
    function setData(?AsynchronousDeviceReplacementJob\DataItemItem $data)
    {
        $this->data = $data;
    }
    /**
     * @return AsynchronousDeviceReplacementJob\DataItemItem data
     */
    function getData() : ?AsynchronousDeviceReplacementJob\DataItemItem
    {
        return $this->data;
    }
}