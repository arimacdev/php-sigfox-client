<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ProfilesList;
class Profiles
{
    /**
     * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
     * 
     */
    public function list(ProfilesList $request) : int
    {
        return $this->client->request('get', '/profiles/', $request, 'int');
    }
    /**
     * Find by id
     *
     * @param string $id The Profile identifier
     *
     * @return ProfilesId
     */
    public function find(string $id) : ProfilesId
    {
        return new ProfilesId($id);
    }
}