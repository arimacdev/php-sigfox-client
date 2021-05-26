<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Helper;
use Psr\Http\Message\StreamInterface;
use Arimac\Sigfox\Request\TilesMonarchKmzJobIdTileskmzGetCoverage;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
class TilesMonarchKmzJobIdTileskmz
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The job's identifier (hexademical format)
     *
     * @internal
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $jobId  The job's identifier (hexademical format)
     */
    public function __construct(Client $client, string $jobId)
    {
        $this->client = $client;
        $this->jobId = $jobId;
    }
    /**
     * Retrieve Sigfox Monarch coverage kmz from a job
     *
     * @param resource|string|StreamInterface                    $file    Specify where the body of a response will
     *                                                                    be saved.
     *                                                                    Types:-
     *                                                                    
     *                                                                    - string (path to file on disk)
     *                                                                    - fopen() resource
     *                                                                    - Psr\Http\Message\StreamInterface
     * @param TilesMonarchKmzJobIdTileskmzGetCoverage|array|null $request The query and body parameters to pass
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
    public function getCoverage($file, $request = null) : void
    {
        if (is_array($request)) {
            /** @var TilesMonarchKmzJobIdTileskmzGetCoverage **/
            $request = TilesMonarchKmzJobIdTileskmzGetCoverage::from($request);
        }
        $this->client->download('get', Helper::bindUrlParams('/tiles/monarch/kmz/{jobId}/tiles.kmz', $this->jobId), $request, $file, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
}