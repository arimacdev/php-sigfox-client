<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\TilesMonarchKmzJobIdTileskmzGetCoverage;
class TilesMonarchKmzJobIdTileskmz extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The job's identifier (hexademical format)
     *
     * @internal
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param TilesMonarchKmzJobIdTileskmzGetCoverage $request The query and body parameters to pass
     */
    public function getCoverage(TilesMonarchKmzJobIdTileskmzGetCoverage $request)
    {
        return $this->client->call('get', $this->bind('/tiles/monarch/kmz/{jobId}/tiles.kmz', $this->jobId), $request);
    }
}