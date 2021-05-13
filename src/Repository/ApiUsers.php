<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersList;
use Arimac\Sigfox\Response\Generated\ApiUsersListResponse;
use Arimac\Sigfox\Request\ApiUsersCreate;
use Arimac\Sigfox\Response\Generated\ApiUsersCreateResponse;
class ApiUsers
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
     * Retrieve a list of API users according to visibility permissions and request filters.
     */
    public function list(ApiUsersList $request) : ApiUsersListResponse
    {
        return $this->client->request('get', '/api-users/', $request, ApiUsersListResponse::class);
    }
    /**
     * Create a new API user.
     */
    public function create(ApiUsersCreate $request) : ApiUsersCreateResponse
    {
        return $this->client->request('post', '/api-users/', $request, ApiUsersCreateResponse::class);
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
        return new ApiUsersId($this->client, $id);
    }
}