<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ProfilesId;
class Profiles
{
    /**
     * @param string $id The Profile identifier
     * @return ProfilesId
     */
    public function find(string $id) : ProfilesId
    {
        return new ProfilesId($id);
    }
}