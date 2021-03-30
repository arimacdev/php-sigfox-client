<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesBulkRestartJobId
{
    /**
     * The job's identidier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identidier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the async job status of a device type's asynchronous job for a restart devices action.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/device-types/bulk/restart/{jobId}', $request, 'int');
    }
}