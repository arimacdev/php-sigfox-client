<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkSuspendJobId
{
    /**
     * The job identifier (hexadecimal format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identifier (hexadecimal format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
}