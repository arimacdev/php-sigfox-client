<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkSuspendJobId
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
     * Retrieve the async job status for a suspend devices action.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/bulk/suspend/{jobId}', $request, 'int');
    }
    /**
     * Resume multiple devices with asynchronous job.
     *
     * @param int $request
     * @return int
     */
    function resume(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/resume', $request, 'int');
    }
}