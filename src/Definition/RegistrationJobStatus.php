<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RegistrationJobStatus\Status;
use Arimac\Sigfox\Definition;
class RegistrationJobStatus extends Definition
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * The total number of devices given to be created
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
     * @param bool $jobDone If the job is finished or not
     */
    function setJobDone(?bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is finished or not
     */
    function getJobDone() : ?bool
    {
        return $this->jobDone;
    }
    /**
     * @param int $total The total number of devices given to be created
     */
    function setTotal(?int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int The total number of devices given to be created
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