<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\RegistrationJobStatus;
class DevicesBulkJobId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The job identifier (hexadecimal format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $jobId  The job identifier (hexadecimal format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the status of an asynchronous job for devices.
     */
    public function get() : RegistrationJobStatus
    {
        return $this->client->request('get', $this->bind('/devices/bulk/{jobId}', $this->jobId), null, RegistrationJobStatus::class);
    }
}