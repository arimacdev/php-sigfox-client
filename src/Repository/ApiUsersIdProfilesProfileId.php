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
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/api-users/{id}/profiles/{profileId}', $this->id, $this->profileId), null);
    }
}