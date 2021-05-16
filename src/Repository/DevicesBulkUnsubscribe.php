<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
class DevicesBulkUnsubscribe extends Repository
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
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkUnsubscribeJobId
     */
    public function find(string $jobId) : DevicesBulkUnsubscribeJobId
    {
        return new DevicesBulkUnsubscribeJobId($this->client, $jobId);
    }
}