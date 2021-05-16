<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\TilesResponse;
use Arimac\Sigfox\Request\TilesPublicCoverageKmzTitles;
class TilesPublicCoverage extends Repository
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
     * Retrieve the information needed to display Sigfox public coverage.
     *
     * @return TilesResponse
     */
    public function get() : TilesResponse
    {
        return $this->client->call('get', '/tiles/public-coverage', null, TilesResponse::class);
    }
    /**
     * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not
     * require a previous calculation
     *
     * @param TilesPublicCoverageKmzTitles $request The query and body parameters to pass
     */
    public function kmzTitles(TilesPublicCoverageKmzTitles $request)
    {
        return $this->client->call('get', '/tiles/public-coverage/kmz/tiles.kmz', $request);
    }
}