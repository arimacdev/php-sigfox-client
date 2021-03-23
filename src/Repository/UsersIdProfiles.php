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
     * @param string $profileId The profile identifier
     * @return UsersIdProfilesProfileId
     */
    public function find(string $profileId) : UsersIdProfilesProfileId
    {
        return new UsersIdProfilesProfileId($this->id, $profileId);
    }
}