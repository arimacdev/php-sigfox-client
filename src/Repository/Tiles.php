<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class Tiles
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
     * @return TilesMonarch
     */
    public function monarch() : TilesMonarch
    {
        return new TilesMonarch($this->client);
    }
    /**
     * @return TilesPublicCoverage
     */
    public function publicCoverage() : TilesPublicCoverage
    {
        return new TilesPublicCoverage($this->client);
    }
}