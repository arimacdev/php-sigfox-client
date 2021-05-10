<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesBulkSuspend;
class DevicesBulkRestartJobId
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
     * Retrieve the async job status for a restart devices action.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/bulk/restart/{jobId}', $this->jobId), null, 'int');
    }
    /**
     * Suspend multiple devices with asynchronous job
     * 
     */
    public function suspend(DevicesBulkSuspend $request) : int
    {
        return $this->client->request('post', $this->bindUrlParams('/devices/bulk/suspend', $this->jobId), $request, 'int');
    }
}