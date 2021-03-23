<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesBulkRestartJobId
{
    /**
     * The job's identidier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identidier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
}