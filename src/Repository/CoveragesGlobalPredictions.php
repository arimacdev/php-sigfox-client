<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGetOne;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsGetOneResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Model\GlobalCoverageRequest;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsGet;
use Arimac\Sigfox\Model\GlobalCoverageResponse;
use Arimac\Sigfox\Request\CoveragesGlobalPredictionsCalculateBulk;
use Arimac\Sigfox\Response\Generated\CoveragesGlobalPredictionsCalculateBulkResponse;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Model\GlobalCoverageBulkResponse;
use Arimac\Sigfox\Response\Async\AsyncResponse;
use Arimac\Sigfox\Response\Async\Model\CoveragesGlobalPredictionsCalculateBulkAsync;
class CoveragesGlobalPredictions
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
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
     * @param CoveragesGlobalPredictionsGetOne|array|null $request The query and body parameters to pass
     *
     * @return CoveragesGlobalPredictionsGetOneResponse
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function getOne($request = null) : CoveragesGlobalPredictionsGetOneResponse
    {
        if (is_array($request)) {
            /** @var CoveragesGlobalPredictionsGetOne **/
            $request = CoveragesGlobalPredictionsGetOne::from($request);
        }
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
     * @param GlobalCoverageRequest|array|null $payload
     *
     * @return GlobalCoverageResponse
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function get($payload) : GlobalCoverageResponse
    {
        if (is_array($payload)) {
            /** @var GlobalCoverageRequest **/
            $payload = GlobalCoverageRequest::from($payload);
        }
        $request = new CoveragesGlobalPredictionsGet();
        $request->setPayload($payload);
        return $this->client->call('post', '/coverages/global/predictions', $request, GlobalCoverageResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Starting the computation of the coverage margins for multiple points, for each redundancy level.
     * For more information please refer to the [Global Coverage API
     * article](https://support.sigfox.com/docs/global-coverage-api).
     *
     * @param GlobalCoverageRequest|array|null $payload
     *
     * @return AsyncResponse<CoveragesGlobalPredictionsCalculateBulkResponse, GlobalCoverageBulkResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     */
    public function calculateBulk($payload) : AsyncResponse
    {
        if (is_array($payload)) {
            /** @var GlobalCoverageRequest **/
            $payload = GlobalCoverageRequest::from($payload);
        }
        $request = new CoveragesGlobalPredictionsCalculateBulk();
        $request->setPayload($payload);
        /** @var CoveragesGlobalPredictionsCalculateBulkResponse **/
        $response = $this->client->call('post', '/coverages/global/predictions/bulk', $request, CoveragesGlobalPredictionsCalculateBulkResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        $jobId = $response->getJobId();
        if (is_null($jobId)) {
            throw new DeserializeException(array('string'), 'null');
        }
        return new AsyncResponse($this->client, new CoveragesGlobalPredictionsCalculateBulkAsync(array($jobId)), $response);
    }
}