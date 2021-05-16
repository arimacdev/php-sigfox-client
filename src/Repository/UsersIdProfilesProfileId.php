<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersIdProfilesProfileIdDelete;
class UsersIdProfilesProfileId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The User identifier
     *
     * @internal
     */
    protected ?string $id;
    /**
     * The profile identifier
     *
     * @internal
     */
    protected ?string $profileId;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param string|undefined $groupId The group identifier
     */
    public function delete(?string $groupId)
    {
        $request = new UsersIdProfilesProfileIdDelete();
        $request->setGroupId($groupId);
        return $this->client->call('delete', $this->bind('/users/{id}/profiles/{profileId}', $this->id, $this->profileId), $request);
    }
}