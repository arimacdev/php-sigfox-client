<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
class ActionJob
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * the informations about the devices already treated
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
     * @param object status the informations about the devices already treated
     */
    function setStatus(object $status)
    {
        $this->status = $status;
    }
    /**
     * @return object the informations about the devices already treated
     */
    function getStatus() : object
    {
        return $this->status;
    }
}