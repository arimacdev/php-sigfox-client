<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGetOne;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsGetOneResponse;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Definition\GlobalCoverageRequest;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGet;
use Arimac\Sigfox\Definition\GlobalCoverageResponse;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsCalculateBulk;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsCalculateBulkResponse;
class CoveragesGlobalPredictions
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
     * Get coverage margins for a selected latitude and longitude, for each
     * redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param CoveragesGlobalPredictionsGetOne $request The query and body parameters to pass
     *
     * @return CoveragesGlobalPredictionsGetOneResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function getOne(CoveragesGlobalPredictionsGetOne $request) : CoveragesGlobalPredictionsGetOneResponse
    {
        return $this->client->call('get', '/coverages/global/predictions', $request, CoveragesGlobalPredictionsGetOneResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
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
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function get(GlobalCoverageRequest $payload) : GlobalCoverageResponse
    {
        $request = new CoveragesGlobalPredictionsGet();
        $request->setPayload($payload);
        return $this->client->call('post', '/coverages/global/predictions', $request, GlobalCoverageResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Starting the computation of the coverage margins for multiple points, for each redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param GlobalCoverageRequest $payload
     *
     * @return CoveragesGlobalPredictionsCalculateBulkResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function calculateBulk(GlobalCoverageRequest $payload) : CoveragesGlobalPredictionsCalculateBulkResponse
    {
        $request = new CoveragesGlobalPredictionsCalculateBulk();
        $request->setPayload($payload);
        return $this->client->call('post', '/coverages/global/predictions/bulk', $request, CoveragesGlobalPredictionsCalculateBulkResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * @return CoveragesGlobalPredictionsBulk
     */
    public function bulk() : CoveragesGlobalPredictionsBulk
    {
        return new CoveragesGlobalPredictionsBulk($this->client);
    }
}