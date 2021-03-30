<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\GroupsId;
class Groups
{
    /**
     * Retrieve a list of groups according to visibility permissions and request filters. 
     *   If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not provided, retrieve all direct sub-groups under the API user's group.
     *   If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/groups/', $request, 'int');
    }
    /**
     * Create a new group.
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/groups/', $request, 'int');
    }
    /**
     * @param string $id The Group identifier
     * @return GroupsId
     */
    public function find(string $id) : GroupsId
    {
        return new GroupsId($id);
    }
}