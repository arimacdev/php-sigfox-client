<?php

namespace Arimac\Sigfox\Repository;

class ContractInfosBulkRestartJobId
{
    /**
     * The job identidier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identidier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve a contract async job status for restart action.
     *
     * @param int $request
     * @return int
     */
    function getStatus(int $request) : int
    {
        return $this->client->request('get', '/contract-infos/bulk/restart/{jobId}', $request, 'int');
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function devices(int $request) : int
    {
        return $this->client->request('get', '/contract-infos/{id}/devices', $request, 'int');
    }
}