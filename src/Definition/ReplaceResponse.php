<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ReplaceResponse\Status;
use Arimac\Sigfox\Definition;
class ReplaceResponse extends Definition
{
    /**
     * The total number of devices to be replaced
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * The information about the devices already processed
     *
     * @var Status
     */
    protected ?Status $status = null;
    /**
     * @param int $total The total number of devices to be replaced
     */
    function setTotal(?int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int The total number of devices to be replaced
     */
    function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * @param Status $status The information about the devices already processed
     */
    function setStatus(?Status $status)
    {
        $this->status = $status;
    }
    /**
     * @return Status The information about the devices already processed
     */
    function getStatus() : ?Status
    {
        return $this->status;
    }
}