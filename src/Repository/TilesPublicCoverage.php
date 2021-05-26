<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Model\TilesResponse;
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
use Psr\Http\Message\StreamInterface;
use Arimac\Sigfox\Request\TilesPublicCoverageKmzTiles;
class TilesPublicCoverage
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
     * Retrieve the information needed to display Sigfox public coverage.
     *
     * @return TilesResponse
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
    public function get() : TilesResponse
    {
        return $this->client->call('get', '/tiles/public-coverage', null, TilesResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not
     * require a previous calculation
     *
     * @param resource|string|StreamInterface        $file    Specify where the body of a response will be saved.
     *                                                        Types:-
     *                                                        
     *                                                        - string (path to file on disk)
     *                                                        - fopen() resource
     *                                                        - Psr\Http\Message\StreamInterface
     * @param TilesPublicCoverageKmzTiles|array|null $request The query and body parameters to pass
     *
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws ResponseException           If server returned any expected HTTP error
     * @throws ValidationException         If request could not be validated according to pre validation rules.
     * @throws DeserializeException        If the request array could not conveted to an object.
     * @throws SerializeException          If the request object could not converted to a JSON value.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function kmzTiles($file, $request = null) : void
    {
        if (is_array($request)) {
            /** @var TilesPublicCoverageKmzTiles **/
            $request = TilesPublicCoverageKmzTiles::from($request);
        }
        $this->client->download('get', '/tiles/public-coverage/kmz/tiles.kmz', $request, $file, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}