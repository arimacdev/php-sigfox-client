<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class TilesMonarchKmzJobId
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The job's identifier (hexademical format)
     *
     * @internal
     */
    protected string $jobId;
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
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->client, $this->jobId);
    }
}