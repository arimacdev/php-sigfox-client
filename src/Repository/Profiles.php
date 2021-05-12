<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ProfilesList;
use Arimac\Sigfox\Response\Generated\ProfilesListResponse;
class Profiles
{
    /**
     * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
     * 
     */
    public function list(ProfilesList $request) : ProfilesListResponse
    {
        return $this->client->request('get', '/profiles/', $request, ProfilesListResponse::class);
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