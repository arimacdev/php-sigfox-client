<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkResumeJobId
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
     * Retrieve the async job status for a resume devices action.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/bulk/resume/{jobId}', $request, 'int');
    }
    /**
     * Unsubscribe multiple devices with asynchronous job.
     *
     * @param int $request
     * @return int
     */
    function unsubscribe(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/unsubscribe', $request, 'int');
    }
}