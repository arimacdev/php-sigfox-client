<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGetOne;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsGetOneResponse;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGet;
use Arimac\Sigfox\Definition\GlobalCoverageResponse;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsCalculateBulk;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsCalculateBulkResponse;
class CoveragesGlobalPredictions
{
    /**
     * Get coverage margins for a selected latitude and longitude, for each
     * redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     * 
     */
    public function getOne(CoveragesGlobalPredictionsGetOne $request) : CoveragesGlobalPredictionsGetOneResponse
    {
        return $this->client->request('get', '/coverages/global/predictions', $request, CoveragesGlobalPredictionsGetOneResponse::class);
    }
    /**
     * Get the coverage margins for multiple points, for each redundancy level.
     * Sigfox recommends to:
     *   -use the bulk endpoint instead when requesting a large number of locations
     *   -not request more than 200 locations at a time
     *   -wait for the result to be returned before requesting again (avoid multithreading)
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     * 
     */
    public function get(CoveragesGlobalPredictionsGet $request) : GlobalCoverageResponse
    {
        return $this->client->request('post', '/coverages/global/predictions', $request, GlobalCoverageResponse::class);
    }
    /**
     * Starting the computation of the coverage margins for multiple points, for each redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     * 
     */
    public function calculateBulk(CoveragesGlobalPredictionsCalculateBulk $request) : CoveragesGlobalPredictionsCalculateBulkResponse
    {
        return $this->client->request('post', '/coverages/global/predictions/bulk', $request, CoveragesGlobalPredictionsCalculateBulkResponse::class);
    }
    /**
     * @return CoveragesGlobalPredictionsBulk
     */
    public function bulk() : CoveragesGlobalPredictionsBulk
    {
        return new CoveragesGlobalPredictionsBulk();
    }
}