<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\TilesMonarchKmzJobIdTileskmzGetCoverage;
class TilesMonarchKmzJobIdTileskmz
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
     * Retrieve Sigfox Monarch coverage kmz from a job
     */
    public function getCoverage(TilesMonarchKmzJobIdTileskmzGetCoverage $request)
    {
        return $this->client->request('get', $this->bind('/tiles/monarch/kmz/{jobId}/tiles.kmz', $this->jobId), $request);
    }
}