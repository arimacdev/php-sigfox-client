<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersIdGet;
use Arimac\Sigfox\Definition\ApiUser;
use Arimac\Sigfox\Definition\ApiUserEdition;
use Arimac\Sigfox\Request\ApiUsersIdUpdate;
use Arimac\Sigfox\Response\Generated\ApiUsersIdRenewCredentialResponse;
class ApiUsersId extends Repository
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
     *
     * @param ApiUsersIdGet $request The query and body parameters to pass
     *
     * @return ApiUser
     */
    public function get(?ApiUsersIdGet $request = null) : ApiUser
    {
        return $this->client->call('get', $this->bind('/api-users/{id}', $this->id), $request, ApiUser::class);
    }
    /**
     * Update information about a given API user.
     *
     * @param ApiUserEdition $apiUser The information to update
     */
    public function update(ApiUserEdition $apiUser)
    {
        $request = new ApiUsersIdUpdate();
        $request->setApiUser($apiUser);
        return $this->client->call('put', $this->bind('/api-users/{id}', $this->id), $request);
    }
    /**
     * Delete a given API user.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/api-users/{id}', $this->id), null);
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
     *
     * @return ApiUsersIdRenewCredentialResponse
     */
    public function renewCredential() : ApiUsersIdRenewCredentialResponse
    {
        return $this->client->call('put', $this->bind('/api-users/{id}/renew-credential', $this->id), null, ApiUsersIdRenewCredentialResponse::class);
    }
}