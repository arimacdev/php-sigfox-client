<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersList;
use Arimac\Sigfox\Response\Generated\UsersListResponse;
use Arimac\Sigfox\Definition\UserCreation;
use Arimac\Sigfox\Request\UsersCreate;
use Arimac\Sigfox\Definition\CreateResponse;
class Users extends Repository
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
     *
     * @param UsersList $request The query and body parameters to pass
     *
     * @return UsersListResponse
     */
    public function list(?UsersList $request = null) : UsersListResponse
    {
        return $this->client->call('get', '/users/', $request, UsersListResponse::class);
    }
    /**
     * Create a new user.
     *
     * @param UserCreation $user The user to create
     *
     * @return CreateResponse
     */
    public function create(UserCreation $user) : CreateResponse
    {
        $request = new UsersCreate();
        $request->setUser($user);
        return $this->client->call('post', '/users/', $request, CreateResponse::class);
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