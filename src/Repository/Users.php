<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersList;
use Arimac\Sigfox\Response\Generated\UsersListResponse;
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
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\User;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Model\UserCreation;
use Arimac\Sigfox\Request\UsersCreate;
use Arimac\Sigfox\Model\CreateResponse;
class Users
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
     * Retrieve a list of users according to visibility permissions and request filters.
     *
     * @param UsersList|array|null $request The query and body parameters to pass
     *
     * @psalm-return PaginateResponse<User,UsersListResponse,E>
     *
     * @psalm-type E=BadRequestException | UnauthorizedException | ForbiddenException | NotFoundException |
     *             InternalServerException
     *
     * @return PaginateResponse<User,UsersListResponse> First generic parameter is the item type and the second type
     *                                                  is the original response type.
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
    public function list($request = null) : PaginateResponse
    {
        if (is_array($request)) {
            /** @var UsersList **/
            $request = UsersList::from($request);
        }
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/users/', $request, UsersListResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Create a new user.
     *
     * @param UserCreation|array|null $user The user to create
     *
     * @return CreateResponse
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
    public function create($user) : CreateResponse
    {
        if (is_array($user)) {
            /** @var UserCreation **/
            $user = UserCreation::from($user);
        }
        $request = new UsersCreate();
        $request->setUser($user);
        return $this->client->call('post', '/users/', $request, CreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 500 => InternalServerException::class));
    }
    /**
     * Find by id
     *
     * @param string $id The User identifier
     *
     * @return UsersId
     */
    public function find(string $id) : UsersId
    {
        return new UsersId($this->client, $id);
    }
}