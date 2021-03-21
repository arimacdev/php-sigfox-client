<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ActionJob\Status;
use Arimac\Sigfox\Definition;
class ActionJob extends Definition
{
    /**
     * If the job is finished or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the informations about the devices already treated
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
     * @param Status $status the informations about the devices already treated
     */
    function setStatus(?Status $status)
    {
        $this->status = $status;
    }
    /**
     * @return Status the informations about the devices already treated
     */
    function getStatus() : ?Status
    {
        return $this->status;
    }
}