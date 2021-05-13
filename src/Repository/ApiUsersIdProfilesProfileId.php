<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class ApiUsersIdProfilesProfileId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
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
     * @param Client $client    The HTTP client
     * @param string $id        The API user identifier
     * @param string $profileId The profile identifier
     */
    public function __construct(Client $client, string $id, string $profileId)
    {
        $this->client = $client;
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete a profile to a given API user.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/api-users/{id}/profiles/{profileId}', $this->id, $this->profileId), null);
    }
}