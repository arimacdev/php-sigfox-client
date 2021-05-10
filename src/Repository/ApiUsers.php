<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ApiUsersList;
use Arimac\Sigfox\Request\ApiUsersCreate;
class ApiUsers
{
    /**
     * Retrieve a list of API users according to visibility permissions and request filters.
     * 
     */
    public function list(ApiUsersList $request) : int
    {
        return $this->client->request('get', '/api-users/', $request, 'int');
    }
    /**
     * Create a new API user.
     * 
     */
    public function create(ApiUsersCreate $request) : int
    {
        return $this->client->request('post', '/api-users/', $request, 'int');
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
        return new ApiUsersId($id);
    }
}