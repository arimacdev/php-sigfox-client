<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\ActionJob;
class DeviceTypesBulkRestartJobId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The job's identidier (hexademical format)
     *
     * @internal
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $jobId  The job's identidier (hexademical format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status of a device type's asynchronous job for a restart devices action.
     *
     * @return ActionJob
     */
    public function get() : ActionJob
    {
        return $this->client->call('get', $this->bind('/device-types/bulk/restart/{jobId}', $this->jobId), null, ActionJob::class);
    }
}