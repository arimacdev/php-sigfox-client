<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Bulk Global Coverage API
 */
class GlobalCoverageBulkResponse
{
    /**
     * If the job is completed or not
     */
    protected bool $jobDone;
    /**
     * the statistics creation time (in milliseconds since the Unix Epoch)
     */
    protected int $time;
    /**
     * An array containing the response for each point.
     */
    protected array $results;
}