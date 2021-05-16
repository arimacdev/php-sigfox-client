<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGetOne;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsGetOneResponse;
use Arimac\Sigfox\Definition\GlobalCoverageRequest;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGet;
use Arimac\Sigfox\Definition\GlobalCoverageResponse;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsCalculateBulk;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsCalculateBulkResponse;
class CoveragesGlobalPredictions extends Repository
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
     * Get coverage margins for a selected latitude and longitude, for each
     * redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param CoveragesGlobalPredictionsGetOne $request The query and body parameters to pass
     *
     * @return CoveragesGlobalPredictionsGetOneResponse
     */
    public function getOne(CoveragesGlobalPredictionsGetOne $request) : CoveragesGlobalPredictionsGetOneResponse
    {
        return $this->client->call('get', '/coverages/global/predictions', $request, CoveragesGlobalPredictionsGetOneResponse::class);
    }
    /**
     * Get the coverage margins for multiple points, for each redundancy level.
     * Sigfox recommends to:
     * -use the bulk endpoint instead when requesting a large number of locations
     * -not request more than 200 locations at a time
     * -wait for the result to be returned before requesting again (avoid multithreading)
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param GlobalCoverageRequest $payload
     *
     * @return GlobalCoverageResponse
     */
    public function get(GlobalCoverageRequest $payload) : GlobalCoverageResponse
    {
        $request = new CoveragesGlobalPredictionsGet();
        $request->setPayload($payload);
        return $this->client->call('post', '/coverages/global/predictions', $request, GlobalCoverageResponse::class);
    }
    /**
     * Starting the computation of the coverage margins for multiple points, for each redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param GlobalCoverageRequest $payload
     *
     * @return CoveragesGlobalPredictionsCalculateBulkResponse
     */
    public function calculateBulk(GlobalCoverageRequest $payload) : CoveragesGlobalPredictionsCalculateBulkResponse
    {
        $request = new CoveragesGlobalPredictionsCalculateBulk();
        $request->setPayload($payload);
        return $this->client->call('post', '/coverages/global/predictions/bulk', $request, CoveragesGlobalPredictionsCalculateBulkResponse::class);
    }
    /**
     * @return CoveragesGlobalPredictionsBulk
     */
    public function bulk() : CoveragesGlobalPredictionsBulk
    {
        return new CoveragesGlobalPredictionsBulk($this->client);
    }
}