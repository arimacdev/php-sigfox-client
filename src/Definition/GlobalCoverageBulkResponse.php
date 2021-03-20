<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Bulk Global Coverage API
 */
class GlobalCoverageBulkResponse
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected bool $jobDone;
    /**
     * the statistics creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
    /**
     * An array containing the response for each point.
     *
     * @var array
     */
    protected array $results;
    /**
     * @param bool jobDone If the job is completed or not
     */
    function setJobDone(bool $jobDone)
    {
        $this->jobDone = $jobDone;
    }
    /**
     * @return bool If the job is completed or not
     */
    function getJobDone() : bool
    {
        return $this->jobDone;
    }
    /**
     * @param int time the statistics creation time (in milliseconds since the Unix Epoch)
     */
    function setTime(int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int the statistics creation time (in milliseconds since the Unix Epoch)
     */
    function getTime() : int
    {
        return $this->time;
    }
    /**
     * @param array results An array containing the response for each point.
     */
    function setResults(array $results)
    {
        $this->results = $results;
    }
    /**
     * @return array An array containing the response for each point.
     */
    function getResults() : array
    {
        return $this->results;
    }
}