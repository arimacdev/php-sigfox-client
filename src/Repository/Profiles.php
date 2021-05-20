<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ProfilesList;
use Arimac\Sigfox\Response\Generated\ProfilesListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\Profile;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
class Profiles
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
     * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
     *
     * @param ProfilesList $request The query and body parameters to pass
     *
     * @return PaginateResponse<Profile,ProfilesListResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?ProfilesList $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new ProfilesList();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/profiles/', $request, ProfilesListResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * Find by id
     *
     * @param string $id The Profile identifier
     *
     * @return ProfilesId
     */
    public function find(string $id) : ProfilesId
    {
        return new ProfilesId($this->client, $id);
    }
}