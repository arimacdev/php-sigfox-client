<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersList;
use Arimac\Sigfox\Response\Generated\ApiUsersListResponse;
use Arimac\Sigfox\Definition\ApiUserCreation;
use Arimac\Sigfox\Request\ApiUsersCreate;
use Arimac\Sigfox\Response\Generated\ApiUsersCreateResponse;
class ApiUsers extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of API users according to visibility permissions and request filters.
     *
     * @param ApiUsersList $request The query and body parameters to pass
     *
     * @return ApiUsersListResponse
     */
    public function list(?ApiUsersList $request = null) : ApiUsersListResponse
    {
        return $this->client->call('get', '/api-users/', $request, ApiUsersListResponse::class);
    }
    /**
     * Create a new API user.
     *
     * @param ApiUserCreation $apiUser
     *
     * @return ApiUsersCreateResponse
     */
    public function create(ApiUserCreation $apiUser) : ApiUsersCreateResponse
    {
        $request = new ApiUsersCreate();
        $request->setApiUser($apiUser);
        return $this->client->call('post', '/api-users/', $request, ApiUsersCreateResponse::class);
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