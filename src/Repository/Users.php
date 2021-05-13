<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersList;
use Arimac\Sigfox\Response\Generated\UsersListResponse;
use Arimac\Sigfox\Request\UsersCreate;
use Arimac\Sigfox\Definition\CreateResponse;
class Users
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of users according to visibility permissions and request filters.
     */
    public function list(UsersList $request) : UsersListResponse
    {
        return $this->client->request('get', '/users/', $request, UsersListResponse::class);
    }
    /**
     * Create a new user.
     */
    public function create(UsersCreate $request) : CreateResponse
    {
        return $this->client->request('post', '/users/', $request, CreateResponse::class);
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