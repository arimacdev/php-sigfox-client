<?php

namespace Arimac\Sigfox\Repository;

class TilesMonarchKmzJobId
{
    /**
     * The job's identifier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identifier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
}