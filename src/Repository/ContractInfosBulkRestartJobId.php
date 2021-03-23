<?php

namespace Arimac\Sigfox\Repository;

class ContractInfosBulkRestartJobId
{
    /**
     * The job identidier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identidier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
}