<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class DeviceTypesBulkRestart
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
     * @param string $jobId The job's identidier (hexademical format)
     *
     * @return DeviceTypesBulkRestartJobId
     */
    public function find(string $jobId) : DeviceTypesBulkRestartJobId
    {
        return new DeviceTypesBulkRestartJobId($this->client, $jobId);
    }
}