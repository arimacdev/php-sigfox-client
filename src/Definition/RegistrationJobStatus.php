<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\RegistrationJobStatus\Status;
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
    protected $serialize = array('status' => Status::class);
    /**
     * Setter for jobDone
     *
     * @param bool $jobDone If the job is finished or not
     *
     * @return self To use in method chains
     */
    public function setJobDone(?bool $jobDone) : self
    {
        $this->jobDone = $jobDone;
        return $this;
    }
    /**
     * Getter for jobDone
     *
     * @return bool If the job is finished or not
     */
    public function getJobDone() : bool
    {
        return $this->jobDone;
    }
    /**
     * Setter for total
     *
     * @param int $total The total number of devices given to be created
     *
     * @return self To use in method chains
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Getter for total
     *
     * @return int The total number of devices given to be created
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * Setter for status
     *
     * @param Status $status The information about the devices already processed
     *
     * @return self To use in method chains
     */
    public function setStatus(?Status $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return Status The information about the devices already processed
     */
    public function getStatus() : Status
    {
        return $this->status;
    }
}