<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Model\KmzCreatePublicRequest;
use Arimac\Sigfox\Request\TilesMonarchKmzStartAsync;
use Arimac\Sigfox\Response\Generated\TilesMonarchKmzStartAsyncResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\ValidationException;
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
     * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation
     * starts if no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is
     * returned.
     *
     * @param KmzCreatePublicRequest|array|null $request The computation will be performed with the specified
     *                                                   coverage mode
     *
     * @return string jobId provided to the customer to request the job status and results
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
     */
    public function startAsync($request) : ?string
    {
        if (is_array($request)) {
            /** @var KmzCreatePublicRequest **/
            $request = KmzCreatePublicRequest::from($request);
        }
        $coreRequest = new TilesMonarchKmzStartAsync();
        $coreRequest->setRequest($request);
        /** @var TilesMonarchKmzStartAsyncResponse **/
        $response = $this->client->call('post', '/tiles/monarch/kmz', $coreRequest, TilesMonarchKmzStartAsyncResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
        return $response->getJobId();
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