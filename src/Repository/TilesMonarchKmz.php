<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\KmzCreatePublicRequest;
use Arimac\Sigfox\Request\TilesMonarchKmzStartAsync;
use Arimac\Sigfox\Response\Generated\TilesMonarchKmzStartAsyncResponse;
class TilesMonarchKmz extends Repository
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
     * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation
     * starts if no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is
     * returned.
     *
     * @param KmzCreatePublicRequest $request The computation will be performed with the specified coverage mode
     *
     * @return TilesMonarchKmzStartAsyncResponse
     */
    public function startAsync(KmzCreatePublicRequest $request) : TilesMonarchKmzStartAsyncResponse
    {
        $request = new TilesMonarchKmzStartAsync();
        $request->setRequest($request);
        return $this->client->call('post', '/tiles/monarch/kmz', $request, TilesMonarchKmzStartAsyncResponse::class);
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