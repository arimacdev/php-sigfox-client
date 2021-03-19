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
}