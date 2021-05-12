<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\ActionJob;
class ContractInfosBulkRestartJobId
{
    /**
     * The job identidier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identidier (hexademical format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve a contract async job status for restart action.
     * 
     */
    public function getStatus() : ActionJob
    {
        return $this->client->request('get', $this->bind('/contract-infos/bulk/restart/{jobId}', $this->jobId), null, ActionJob::class);
    }
}