<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class CoveragesGlobal
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
     * @return CoveragesGlobalPredictions
     */
    public function predictions() : CoveragesGlobalPredictions
    {
        return new CoveragesGlobalPredictions($this->client);
    }
}