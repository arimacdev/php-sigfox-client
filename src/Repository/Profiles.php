<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ProfilesId;
class Profiles
{
    /**
     * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/profiles/', $request, 'int');
    }
    /**
     * @param string $id The Profile identifier
     * @return ProfilesId
     */
    public function find(string $id) : ProfilesId
    {
        return new ProfilesId($id);
    }
}