<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersList;
use Arimac\Sigfox\Response\Generated\ApiUsersListResponse;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\MethodNotAllowedException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Definition\ApiUserCreation;
use Arimac\Sigfox\Request\ApiUsersCreate;
use Arimac\Sigfox\Response\Generated\ApiUsersCreateResponse;
class ApiUsers
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
     * Retrieve a list of API users according to visibility permissions and request filters.
     *
     * @param ApiUsersList $request The query and body parameters to pass
     *
     * @return ApiUsersListResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?ApiUsersList $request = null) : ApiUsersListResponse
    {
        return $this->client->call('get', '/api-users/', $request, ApiUsersListResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class));
    }
    /**
     * Create a new API user.
     *
     * @param ApiUserCreation $apiUser
     *
     * @return ApiUsersCreateResponse
     *
     * @throws DeserializeException        If failed to deserialize response body as a response object.
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(ApiUserCreation $apiUser) : ApiUsersCreateResponse
    {
        $request = new ApiUsersCreate();
        $request->setApiUser($apiUser);
        return $this->client->call('post', '/api-users/', $request, ApiUsersCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class));
    }
    /**
     * Find by id
     *
     * @param string $id The API user identifier
     *
     * @return ApiUsersId
     */
    public function find(string $id) : ApiUsersId
    {
        return new ApiUsersId($this->client, $id);
    }
}