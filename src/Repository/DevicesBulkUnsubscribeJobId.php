<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\ActionJob;
class DevicesBulkUnsubscribeJobId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The job identifier (hexadecimal format)
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
     * @param string $jobId  The job identifier (hexadecimal format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status for an unsubscribe devices action.
     *
     * @return ActionJob
     */
    public function get() : ActionJob
    {
        return $this->client->call('get', $this->bind('/devices/bulk/unsubscribe/{jobId}', $this->jobId), null, ActionJob::class);
    }
}