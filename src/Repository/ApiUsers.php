<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ApiUsersId;
class ApiUsers
{
    /**
     * Retrieve a list of API users according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/api-users/', $request, 'int');
    }
    /**
     * Create a new API user.
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/api-users/', $request, 'int');
    }
    /**
     * @param string $id The API user identifier
     * @return ApiUsersId
     */
    public function find(string $id) : ApiUsersId
    {
        return new ApiUsersId($id);
    }
}