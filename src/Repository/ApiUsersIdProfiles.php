<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ApiUsersIdProfilesProfileId;
class ApiUsersIdProfiles
{
    /**
     * The API user identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Associate new profiles to a given API user.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/api-users/{id}/profiles', $request, 'int');
    }
    /**
     * @param string $profileId The profile identifier
     * @return ApiUsersIdProfilesProfileId
     */
    public function find(string $profileId) : ApiUsersIdProfilesProfileId
    {
        return new ApiUsersIdProfilesProfileId($this->id, $profileId);
    }
}