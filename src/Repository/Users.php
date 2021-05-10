<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersList;
use Arimac\Sigfox\Request\UsersCreate;
class Users
{
    /**
     * Retrieve a list of users according to visibility permissions and request filters.
     * 
     */
    public function list(UsersList $request) : int
    {
        return $this->client->request('get', '/users/', $request, 'int');
    }
    /**
     * Create a new user.
     * 
     */
    public function create(UsersCreate $request) : int
    {
        return $this->client->request('post', '/users/', $request, 'int');
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