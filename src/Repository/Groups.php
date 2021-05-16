<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\GroupsList;
use Arimac\Sigfox\Response\Generated\GroupsListResponse;
use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Request\GroupsCreate;
use Arimac\Sigfox\Response\Generated\GroupsCreateResponse;
class Groups extends Repository
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
     * Retrieve a list of groups according to visibility permissions and request filters.
     * If parentIds is provided, retrieve all direct sub-groups under the given parents. If parentIds is not
     * provided, retrieve all direct sub-groups under the API user's group.
     * If deep is true, retrieve all sub-groups under either given parent groups or the API user group.
     *
     * @param GroupsList $request The query and body parameters to pass
     *
     * @return GroupsListResponse
     */
    public function list(?GroupsList $request = null) : GroupsListResponse
    {
        return $this->client->call('get', '/groups/', $request, GroupsListResponse::class);
    }
    /**
     * Create a new group.
     *
     * @param CommonGroupCreate $group
     *
     * @return GroupsCreateResponse
     */
    public function create(CommonGroupCreate $group) : GroupsCreateResponse
    {
        $request = new GroupsCreate();
        $request->setGroup($group);
        return $this->client->call('post', '/groups/', $request, GroupsCreateResponse::class);
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