<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkUnsubscribeJobId
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
     * Retrieve the async job status for an unsubscribe devices action.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/bulk/unsubscribe/{jobId}', $this->jobId), null, 'int');
    }
}