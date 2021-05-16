<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersIdProfilesAddRoles;
class UsersIdProfiles extends Repository
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
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The User identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * add user roles to a user.
     *
     * @param array $userRoles user roles array to add
     */
    public function addRoles(array $userRoles)
    {
        $request = new UsersIdProfilesAddRoles();
        $request->setUserRoles($userRoles);
        return $this->client->call('put', $this->bind('/users/{id}/profiles', $this->id), $request);
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
        return new UsersIdProfilesProfileId($this->client, $this->id, $profileId);
    }
}