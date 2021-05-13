<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersIdProfilesProfileIdDelete;
class UsersIdProfilesProfileId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The User identifier
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
     * @param string $id        The User identifier
     * @param string $profileId The profile identifier
     */
    public function __construct(Client $client, string $id, string $profileId)
    {
        $this->client = $client;
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete profiles or a given profile associated to the groupId
     */
    public function delete(UsersIdProfilesProfileIdDelete $request)
    {
        return $this->client->request('delete', $this->bind('/users/{id}/profiles/{profileId}', $this->id, $this->profileId), $request);
    }
}