<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkUnsubscribeJobId
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
     * Retrieve the async job status for an unsubscribe devices action.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/bulk/unsubscribe/{jobId}', $request, 'int');
    }
}