<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersIdProfilesProfileIdDelete;
class UsersIdProfilesProfileId
{
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
     * @param string $id The User identifier
     * @param string $profileId The profile identifier
     */
    public function __construct(string $id, string $profileId)
    {
        $this->id = $id;
        $this->profileId = $profileId;
    }
    /**
     * Delete profiles or a given profile associated to the groupId
     * 
     */
    public function delete(UsersIdProfilesProfileIdDelete $request)
    {
        return $this->client->request('delete', $this->bind('/users/{id}/profiles/{profileId}', $this->id, $this->profileId), $request);
    }
}