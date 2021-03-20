<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class RegistrationJobStatus
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * The total number of devices given to be created
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
     * @param bool jobDone If the job is finished or not
     */
    function setJobDone(bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is finished or not
     */
    function getJobDone() : bool
    {
        return $this->jobDone;
    }
    /**
     * @param int total The total number of devices given to be created
     */
    function setTotal(int $total)
    {
        $this->total = $total;
    }
    /**
     * @return int The total number of devices given to be created
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