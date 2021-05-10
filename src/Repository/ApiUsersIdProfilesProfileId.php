<?php

namespace Arimac\Sigfox\Repository;

class ApiUsersIdProfilesProfileId
{
    /**
     * The API user identifier
     */
    protected ?string $id;
    /**
     * The profile identifier
     */
    protected ?string $profileId;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     * @param string $profileId The profile identifier
     */
    public function __construct(string $id, string $profileId)
    {
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete a profile to a given API user.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bindUrlParams('/api-users/{id}/profiles/{profileId}', $this->id, $this->profileId), null, 'int');
    }
    /**
     * Generate a new password for a given API user.
     * 
     */
    public function renewCredential() : int
    {
        return $this->client->request('put', $this->bindUrlParams('/api-users/{id}/renew-credential', $this->id, $this->profileId), null, 'int');
    }
}