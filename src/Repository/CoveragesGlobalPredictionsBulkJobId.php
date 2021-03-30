<?php

namespace Arimac\Sigfox\Repository;

class CoveragesGlobalPredictionsBulkJobId
{
    /**
     * The job's identifier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identifier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve coverage predictions computation from asynchronous job status and results.
     * For more information please refer to the [Global Coverage API article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param int $request
     * @return int
     */
    function getStatus(int $request) : int
    {
        return $this->client->request('get', '/coverages/global/predictions/bulk/{jobId}', $request, 'int');
    }
    /**
     * Get operator coverage redundancy for a selected latitude and longitude,
     * for specific device situation.
     * For more information please refer to the [Global Coverage API article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param int $request
     * @return int
     */
    function operatorsRedundancy(int $request) : int
    {
        return $this->client->request('get', '/coverages/operators/redundancy', $request, 'int');
    }
}