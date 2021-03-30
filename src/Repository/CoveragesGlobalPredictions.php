<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobalPredictionsBulk;
class CoveragesGlobalPredictions
{
    /**
     * Get coverage margins for a selected latitude and longitude, for each
     * redundancy level.
     * For more information please refer to the [Global Coverage API article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param int $request
     * @return int
     */
    function getOne(int $request) : int
    {
        return $this->client->request('get', '/coverages/global/predictions', $request, 'int');
    }
    /**
     * Get the coverage margins for multiple points, for each redundancy level.
     * Sigfox recommends to:
     *   -use the bulk endpoint instead when requesting a large number of locations
     *   -not request more than 200 locations at a time
     *   -wait for the result to be returned before requesting again (avoid multithreading)
     * For more information please refer to the [Global Coverage API article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('post', '/coverages/global/predictions', $request, 'int');
    }
    /**
     * Starting the computation of the coverage margins for multiple points, for each redundancy level.
     * For more information please refer to the [Global Coverage API article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param int $request
     * @return int
     */
    function bulk(int $request) : int
    {
        return $this->client->request('post', '/coverages/global/predictions/bulk', $request, 'int');
    }
    /**
     * @return CoveragesGlobalPredictionsBulk
     */
    public function bulk() : CoveragesGlobalPredictionsBulk
    {
        return new CoveragesGlobalPredictionsBulk();
    }
}