<?php

namespace Arimac\Sigfox\Repository;

class ApiUsersIdProfilesProfileId
{
    /**
     * The API user identifier
     */
    protected string $id;
    /**
     * The profile identifier
     */
    protected string $profileId;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     * @param string $profileId The profile identifier
     */
    function __construct(string $id, string $profileId)
    {
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete a profile to a given API user.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/api-users/{id}/profiles/{profileId}', $request, 'int');
    }
    /**
     * Generate a new password for a given API user.
     *
     * @param int $request
     * @return int
     */
    function renewCredential(int $request) : int
    {
        return $this->client->request('put', '/api-users/{id}/renew-credential', $request, 'int');
    }
}