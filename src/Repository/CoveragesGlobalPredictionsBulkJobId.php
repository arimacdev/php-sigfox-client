<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\GlobalCoverageBulkResponse;
class CoveragesGlobalPredictionsBulkJobId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The job's identifier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $jobId  The job's identifier (hexademical format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve coverage predictions computation from asynchronous job status and results.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     */
    public function getStatus() : GlobalCoverageBulkResponse
    {
        return $this->client->request('get', $this->bind('/coverages/global/predictions/bulk/{jobId}', $this->jobId), null, GlobalCoverageBulkResponse::class);
    }
}