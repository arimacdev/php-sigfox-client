<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\KmzStatusResponse;
class TilesMonarchKmzJobId extends Repository
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
     * Retrieve Sigfox Monarch coverage kmz computation from asynchronous job status
     *
     * @return KmzStatusResponse
     */
    public function get() : KmzStatusResponse
    {
        return $this->client->call('get', $this->bind('/tiles/monarch/kmz/{jobId}', $this->jobId), null, KmzStatusResponse::class);
    }
    /**
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->client, $this->jobId);
    }
}