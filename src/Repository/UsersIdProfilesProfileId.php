<?php

namespace Arimac\Sigfox\Repository;

class UsersIdProfilesProfileId
{
    /**
     * The User identifier
     */
    protected string $id;
    /**
     * The profile identifier
     */
    protected string $profileId;
    /**
     * Creating the repository
     *
     * @param string $id The User identifier
     * @param string $profileId The profile identifier
     */
    function __construct(string $id, string $profileId)
    {
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete profiles or a given profile associated to the groupId
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/users/{id}/profiles/{profileId}', $request, 'int');
    }
}