<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class ContractInfosBulkRestart
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job identidier (hexademical format)
     *
     * @return ContractInfosBulkRestartJobId
     */
    public function find(string $jobId) : ContractInfosBulkRestartJobId
    {
        return new ContractInfosBulkRestartJobId($this->client, $jobId);
    }
}