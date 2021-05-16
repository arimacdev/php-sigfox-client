<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\ActionJob;
class ContractInfosBulkRestartJobId extends Repository
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The job identidier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $jobId  The job identidier (hexademical format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve a contract async job status for restart action.
     *
     * @return ActionJob
     */
    public function getStatus() : ActionJob
    {
        return $this->client->call('get', $this->bind('/contract-infos/bulk/restart/{jobId}', $this->jobId), null, ActionJob::class);
    }
}