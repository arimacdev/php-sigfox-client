<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\ActionJob;
class DevicesBulkRestartJobId
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
     * Retrieve the async job status for a restart devices action.
     */
    public function get() : ActionJob
    {
        return $this->client->request('get', $this->bind('/devices/bulk/restart/{jobId}', $this->jobId), null, ActionJob::class);
    }
}