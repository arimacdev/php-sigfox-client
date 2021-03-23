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
     * @param string $profileId The profile identifier
     * @return ApiUsersIdProfilesProfileId
     */
    public function find(string $profileId) : ApiUsersIdProfilesProfileId
    {
        return new ApiUsersIdProfilesProfileId($this->id, $profileId);
    }
}