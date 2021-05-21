<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\GroupsList;
use Arimac\Sigfox\Response\Generated\GroupsListResponse;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Response\Paginated\PaginatedResponse;
use Arimac\Sigfox\Model\Group;
use Arimac\Sigfox\Response\Paginated\PaginateResponse;
use Arimac\Sigfox\Model\CommonGroupCreate;
use Arimac\Sigfox\Request\GroupsCreate;
use Arimac\Sigfox\Response\Generated\GroupsCreateResponse;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\ConflictException;
class Groups
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
     * Retrieve a list of groups according to visibility permissions and request filters.
     * If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not
     * provided, retrieve all direct sub-groups under the API user's group.
     * If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
     *
     * @param GroupsList $request The query and body parameters to pass
     *
     * @return PaginateResponse<Group,GroupsListResponse>
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function list(?GroupsList $request = null) : PaginateResponse
    {
        $errors = array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 500 => InternalServerException::class);
        /** @var Model&PaginatedResponse **/
        $response = $this->client->call('get', '/groups/', $request, GroupsListResponse::class, $errors);
        return new PaginateResponse($this->client, $response, $errors);
    }
    /**
     * Create a new group.
     *
     * @param CommonGroupCreate|null $group
     *
     * @return string The new created group identifier
     *
     * @throws SerializeException          If request object failed to serialize to a JSON serializable type.
     * @throws UnexpectedResponseException If server returned an unexpected status code.
     * @throws BadRequestException         If server returned a HTTP 400 error.
     * @throws UnauthorizedException       If server returned a HTTP 401 error.
     * @throws ForbiddenException          If server returned a HTTP 403 error.
     * @throws NotFoundException           If server returned a HTTP 404 error.
     * @throws ConflictException           If server returned a HTTP 409 error.
     * @throws InternalServerException     If server returned a HTTP 500 error.
     */
    public function create(?CommonGroupCreate $group) : ?string
    {
        $request = new GroupsCreate();
        $request->setGroup($group);
        /** @var GroupsCreateResponse **/
        $response = $this->client->call('post', '/groups/', $request, GroupsCreateResponse::class, array(400 => BadRequestException::class, 401 => UnauthorizedException::class, 403 => ForbiddenException::class, 404 => NotFoundException::class, 409 => ConflictException::class, 500 => InternalServerException::class));
        return $response->getId();
    }
    /**
     * Find by id
     *
     * @param string $id The Group identifier
     *
     * @return GroupsId
     */
    public function find(string $id) : GroupsId
    {
        return new GroupsId($this->client, $id);
    }
}