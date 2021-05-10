<?php

namespace Arimac\Sigfox\Repository;

class ContractInfosBulkRestart
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job identidier (hexademical format)
     *
     * @return ContractInfosBulkRestartJobId
     */
    public function find(string $jobId) : ContractInfosBulkRestartJobId
    {
        return new ContractInfosBulkRestartJobId($jobId);
    }
}