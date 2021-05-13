<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class CoveragesGlobalPredictionsBulk
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identifier (hexademical format)
     *
     * @return CoveragesGlobalPredictionsBulkJobId
     */
    public function find(string $jobId) : CoveragesGlobalPredictionsBulkJobId
    {
        return new CoveragesGlobalPredictionsBulkJobId($this->client, $jobId);
    }
}