<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class DevicesBulkSuspend
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * Creating the repository
     *
     * @internal
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
     * @return DevicesBulkSuspendJobId
     */
    public function find(string $jobId) : DevicesBulkSuspendJobId
    {
        return new DevicesBulkSuspendJobId($this->client, $jobId);
    }
}