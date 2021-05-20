<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersList;
use Arimac\Sigfox\Response\Generated\ApiUsersListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\MethodNotAllowedException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\ApiUser;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Model\ApiUserCreation;
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
     * @return PaginateResponse<ApiUser,ApiUsersListResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?ApiUsersList $request = null) : PaginateResponse
    {
        if (!isset($request)) {
            $request = new ApiUsersList();
            $request->setLimit(100);
            $request->setOffset(0);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/api-users/', $request, ApiUsersListResponse::class, $errors);
        return new PaginateResponse($this->client, $request, $response, $errors);
    }
    /**
     * Create a new API user.
     *
     * @param ApiUserCreation|undefined $apiUser
     *
     * @return string The newly created API user identifier
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws MethodNotAllowedException   If server returned a HTTP 405 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(?ApiUserCreation $apiUser) : ?string
    {
        $request = new ApiUsersCreate();
        $request->setApiUser($apiUser);
        /** @var ApiUsersCreateResponse **/
        $response = $this->client->call('post', '/api-users/', $request, ApiUsersCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 405 => MethodNotAllowedException::class, 500 => InternalServerException::class));
        return $response->getId();
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