<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersList;
use Arimac\Sigfox\Response\Generated\UsersListResponse;
use Arimac\Sigfox\Request\UsersCreate;
use Arimac\Sigfox\Definition\CreateResponse;
class Users
{
    /**
     * Retrieve a list of users according to visibility permissions and request filters.
     * 
     */
    public function list(UsersList $request) : UsersListResponse
    {
        return $this->client->request('get', '/users/', $request, UsersListResponse::class);
    }
    /**
     * Create a new user.
     * 
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
        return new UsersId($id);
    }
}