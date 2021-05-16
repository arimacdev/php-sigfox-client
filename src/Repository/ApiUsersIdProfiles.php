<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\ProfileIds;
use Arimac\Sigfox\Request\ApiUsersIdProfilesUpdate;
class ApiUsersIdProfiles extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The API user identifier
     *
     * @internal
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param ProfileIds $profileIds The API profile to update
     */
    public function update(ProfileIds $profileIds)
    {
        $request = new ApiUsersIdProfilesUpdate();
        $request->setProfileIds($profileIds);
        return $this->client->call('put', $this->bind('/api-users/{id}/profiles', $this->id), $request);
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