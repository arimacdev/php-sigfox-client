<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\UsersId;
class Users
{
    /**
     * Retrieve a list of users according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/users/', $request, 'int');
    }
    /**
     * Create a new user.
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/users/', $request, 'int');
    }
    /**
     * @param string $id The User identifier
     * @return UsersId
     */
    public function find(string $id) : UsersId
    {
        return new UsersId($id);
    }
}