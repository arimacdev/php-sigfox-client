<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkJobId
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
     * Retrieve the status of an asynchronous job for devices.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bind('/devices/bulk/{jobId}', $this->jobId), null, 'int');
    }
}