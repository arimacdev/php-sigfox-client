<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\TilesResponse;
class TilesMonarch extends Repository
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
     * Retrieve the information needed to display Sigfox Monarch service coverage.
     *
     * @return TilesResponse
     */
    public function get() : TilesResponse
    {
        return $this->client->call('get', '/tiles/monarch', null, TilesResponse::class);
    }
    /**
     * @return TilesMonarchKmz
     */
    public function kmz() : TilesMonarchKmz
    {
        return new TilesMonarchKmz($this->client);
    }
}