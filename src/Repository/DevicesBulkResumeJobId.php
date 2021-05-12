<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\ActionJob;
class DevicesBulkResumeJobId
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
     * Retrieve the async job status for a resume devices action.
     * 
     */
    public function get() : ActionJob
    {
        return $this->client->request('get', $this->bind('/devices/bulk/resume/{jobId}', $this->jobId), null, ActionJob::class);
    }
}