<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\UsersIdProfilesProfileId;
class UsersIdProfiles
{
    /**
     * The User identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The User identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * add user roles to a user.
     *
     * @param int $request
     * @return int
     */
    function addRoles(int $request) : int
    {
        return $this->client->request('put', '/users/{id}/profiles', $request, 'int');
    }
    /**
     * @param string $profileId The profile identifier
     * @return UsersIdProfilesProfileId
     */
    public function find(string $profileId) : UsersIdProfilesProfileId
    {
        return new UsersIdProfilesProfileId($this->id, $profileId);
    }
}