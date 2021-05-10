<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\CoveragesOperatorsRedundancy;
class CoveragesGlobalPredictionsBulkJobId
{
    /**
     * The job's identifier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identifier (hexademical format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve coverage predictions computation from asynchronous job status and results.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     * 
     */
    public function getStatus() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/coverages/global/predictions/bulk/{jobId}', $this->jobId), null, 'int');
    }
    /**
     * Get operator coverage redundancy for a selected latitude and longitude,
     * for specific device situation.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     * 
     */
    public function operatorsRedundancy(CoveragesOperatorsRedundancy $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/coverages/operators/redundancy', $this->jobId), $request, 'int');
    }
}