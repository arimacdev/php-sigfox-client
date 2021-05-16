<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
class Tiles extends Repository
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