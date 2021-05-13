<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ApiUsersIdProfilesUpdate;
class ApiUsersIdProfiles
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
     * Associate new profiles to a given API user.
     */
    public function update(ApiUsersIdProfilesUpdate $request)
    {
        return $this->client->request('put', $this->bind('/api-users/{id}/profiles', $this->id), $request);
    }
    /**
     * Find by profileId
     *
     * @param string $profileId The profile identifier
     *
     * @return ApiUsersIdProfilesProfileId
     */
    public function find(string $profileId) : ApiUsersIdProfilesProfileId
    {
        return new ApiUsersIdProfilesProfileId($this->client, $this->id, $profileId);
    }
}