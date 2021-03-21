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
     * @var ActionJob\Status
     */
    protected ?ActionJob\Status $status = null;
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
     * @param ActionJob\Status $status the informations about the devices already treated
     */
    function setStatus(?ActionJob\Status $status)
    {
        $this->status = $status;
    }
    /**
     * @return ActionJob\Status the informations about the devices already treated
     */
    function getStatus() : ?ActionJob\Status
    {
        return $this->status;
    }
}