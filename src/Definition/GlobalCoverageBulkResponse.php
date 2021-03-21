<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GlobalCoverageBulkResponse\ResultsItem;
use Arimac\Sigfox\Definition;
/**
 * Returned data for Bulk Global Coverage API
 */
class GlobalCoverageBulkResponse extends Definition
{
    /**
     * If the job is completed or not
     *
     * @var bool
     */
    protected ?bool $jobDone = null;
    /**
     * the statistics creation time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * An array containing the response for each point.
     *
     * @var ResultsItem[]
     */
    protected ?array $results = null;
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
     * @param int $time the statistics creation time (in milliseconds since the Unix Epoch)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int the statistics creation time (in milliseconds since the Unix Epoch)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @param ResultsItem[] $results An array containing the response for each point.
     */
    function setResults(?array $results)
    {
        $this->results = $results;
    }
    /**
     * @return ResultsItem[] An array containing the response for each point.
     */
    function getResults() : ?array
    {
        return $this->results;
    }
}