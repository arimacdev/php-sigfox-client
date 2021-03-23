<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosBulkRestartJobId;
class ContractInfosBulkRestart
{
    /**
     * @param string $jobId The job identidier (hexademical format)
     * @return ContractInfosBulkRestartJobId
     */
    public function find(string $jobId) : ContractInfosBulkRestartJobId
    {
        return new ContractInfosBulkRestartJobId($jobId);
    }
}