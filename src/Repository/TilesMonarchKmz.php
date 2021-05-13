<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\TilesMonarchKmzStartAsync;
use Arimac\Sigfox\Response\Generated\TilesMonarchKmzStartAsyncResponse;
class TilesMonarchKmz
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
     * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation starts if
     * no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is returned.
     */
    public function startAsync(TilesMonarchKmzStartAsync $request) : TilesMonarchKmzStartAsyncResponse
    {
        return $this->client->request('post', '/tiles/monarch/kmz', $request, TilesMonarchKmzStartAsyncResponse::class);
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identifier (hexademical format)
     *
     * @return TilesMonarchKmzJobId
     */
    public function find(string $jobId) : TilesMonarchKmzJobId
    {
        return new TilesMonarchKmzJobId($this->client, $jobId);
    }
}