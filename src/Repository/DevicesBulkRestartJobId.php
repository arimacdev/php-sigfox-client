<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkRestartJobId
{
    /**
     * The job identifier (hexadecimal format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identifier (hexadecimal format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status for a restart devices action.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/bulk/restart/{jobId}', $request, 'int');
    }
    /**
     * Suspend multiple devices with asynchronous job
     *
     * @param int $request
     * @return int
     */
    function suspend(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/suspend', $request, 'int');
    }
}