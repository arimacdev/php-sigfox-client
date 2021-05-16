<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\KmzCreatePublicRequest;
use Arimac\Sigfox\Request\TilesMonarchKmzStartAsync;
use Arimac\Sigfox\Response\Generated\TilesMonarchKmzStartAsyncResponse;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
class TilesMonarchKmz
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
     * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation
     * starts if no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is
     * returned.
     *
     * @param KmzCreatePublicRequest $request The computation will be performed with the specified coverage mode
     *
     * @return TilesMonarchKmzStartAsyncResponse
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
    public function startAsync(KmzCreatePublicRequest $request) : TilesMonarchKmzStartAsyncResponse
    {
        $request = new TilesMonarchKmzStartAsync();
        $request->setRequest($request);
        return $this->client->call('post', '/tiles/monarch/kmz', $request, TilesMonarchKmzStartAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identifier (hexademical format)
     *
     * @return TilesMonarchKmzJobId
     */
    public function find(string $jobId) : TilesMonarchKmzJobId
    {
        return new TilesMonarchKmzJobId($this->client, $jobId);
    }
}