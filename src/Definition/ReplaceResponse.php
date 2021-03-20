<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class ReplaceResponse
{
    /**
     * The total number of devices to be replaced
     *
     * @var int
     */
    protected int $total;
    /**
     * The information about the devices already processed
     *
     * @var object
     */
    protected object $status;
    /**
     * @param int total The total number of devices to be replaced
     */
    function setTotal(int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int The total number of devices to be replaced
     */
    function getTotal() : int
    {
        return $this->total;
    }
    /**
     * @param object status The information about the devices already processed
     */
    function setStatus(object $status)
    {
        $this->status = $status;
    }
    /**
     * @return object The information about the devices already processed
     */
    function getStatus() : object
    {
        return $this->status;
    }
}