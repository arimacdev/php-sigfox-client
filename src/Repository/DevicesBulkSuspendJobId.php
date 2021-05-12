<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\ActionJob;
class DevicesBulkSuspendJobId
{
    /**
     * The job identifier (hexadecimal format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identifier (hexadecimal format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status for a suspend devices action.
     * 
     */
    public function get() : ActionJob
    {
        return $this->client->request('get', $this->bind('/devices/bulk/suspend/{jobId}', $this->jobId), null, ActionJob::class);
    }
}