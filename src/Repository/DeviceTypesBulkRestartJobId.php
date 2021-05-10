<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesBulkRestartJobId
{
    /**
     * The job's identidier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identidier (hexademical format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status of a device type's asynchronous job for a restart devices action.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/device-types/bulk/restart/{jobId}', $this->jobId), null, 'int');
    }
}