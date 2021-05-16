<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\CoveragesOperatorsRedundancy;
use Arimac\Sigfox\Definition\RedundancyResponse;
class Coverages extends Repository
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
     * @return CoveragesGlobal
     */
    public function global() : CoveragesGlobal
    {
        return new CoveragesGlobal($this->client);
    }
    /**
     * Get operator coverage redundancy for a selected latitude and longitude,
     * for specific device situation.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param CoveragesOperatorsRedundancy $request The query and body parameters to pass
     *
     * @return RedundancyResponse
     */
    public function operatorsRedundancy(CoveragesOperatorsRedundancy $request) : RedundancyResponse
    {
        return $this->client->call('get', '/coverages/operators/redundancy', $request, RedundancyResponse::class);
    }
}