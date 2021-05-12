<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\GlobalCoverageBulkResponse;
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
    public function getStatus() : GlobalCoverageBulkResponse
    {
        return $this->client->request('get', $this->bind('/coverages/global/predictions/bulk/{jobId}', $this->jobId), null, GlobalCoverageBulkResponse::class);
    }
}