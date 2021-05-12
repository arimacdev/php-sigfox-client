<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersIdProfilesAddRoles;
class UsersIdProfiles
{
    /**
     * The User identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The User identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * add user roles to a user.
     * 
     */
    public function addRoles(UsersIdProfilesAddRoles $request)
    {
        return $this->client->request('put', $this->bind('/users/{id}/profiles', $this->id), $request);
    }
    /**
     * Find by profileId
     *
     * @param string $profileId The profile identifier
     *
     * @return UsersIdProfilesProfileId
     */
    public function find(string $profileId) : UsersIdProfilesProfileId
    {
        return new UsersIdProfilesProfileId($this->id, $profileId);
    }
}