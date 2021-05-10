<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\GroupsList;
use Arimac\Sigfox\Request\GroupsCreate;
class Groups
{
    /**
     * Retrieve a list of groups according to visibility permissions and request filters. 
     *   If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not provided,
     * retrieve all direct sub-groups under the API user's group.
     *   If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
     * 
     */
    public function list(GroupsList $request) : int
    {
        return $this->client->request('get', '/groups/', $request, 'int');
    }
    /**
     * Create a new group.
     * 
     */
    public function create(GroupsCreate $request) : int
    {
        return $this->client->request('post', '/groups/', $request, 'int');
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
        return new GroupsId($id);
    }
}