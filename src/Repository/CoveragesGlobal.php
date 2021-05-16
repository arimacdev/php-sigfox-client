<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
class CoveragesGlobal extends Repository
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
     * @return CoveragesGlobalPredictions
     */
    public function predictions() : CoveragesGlobalPredictions
    {
        return new CoveragesGlobalPredictions($this->client);
    }
}