<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersIdGet;
use Arimac\Sigfox\Definition\ApiUser;
use Arimac\Sigfox\Request\ApiUsersIdUpdate;
use Arimac\Sigfox\Response\Generated\ApiUsersIdRenewCredentialResponse;
class ApiUsersId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The API user identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The API user identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given API user.
     */
    public function get(ApiUsersIdGet $request) : ApiUser
    {
        return $this->client->request('get', $this->bind('/api-users/{id}', $this->id), $request, ApiUser::class);
    }
    /**
     * Update information about a given API user.
     */
    public function update(ApiUsersIdUpdate $request)
    {
        return $this->client->request('put', $this->bind('/api-users/{id}', $this->id), $request);
    }
    /**
     * Delete a given API user.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/api-users/{id}', $this->id), null);
    }
    /**
     * @return ApiUsersIdProfiles
     */
    public function profiles() : ApiUsersIdProfiles
    {
        return new ApiUsersIdProfiles($this->client, $this->id);
    }
    /**
     * Generate a new password for a given API user.
     */
    public function renewCredential() : ApiUsersIdRenewCredentialResponse
    {
        return $this->client->request('put', $this->bind('/api-users/{id}/renew-credential', $this->id), null, ApiUsersIdRenewCredentialResponse::class);
    }
}