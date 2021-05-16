<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
class CoveragesGlobalPredictionsBulk extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @internal
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