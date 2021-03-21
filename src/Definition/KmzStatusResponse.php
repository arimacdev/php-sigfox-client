<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class KmzStatusResponse extends Definition
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the kmz layer creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * @param bool $jobDone If the job is completed or not
     */
    function setJobDone(?bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is completed or not
     */
    function getJobDone() : ?bool
    {
        return $this->jobDone;
    }
    /**
     * @param int $time the kmz layer creation time (in milliseconds since the Unix Epoch)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int the kmz layer creation time (in milliseconds since the Unix Epoch)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
}