<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\UsersIdProfiles;
class UsersId
{
    /**
     * The User identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The User identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return UsersIdProfiles
     */
    public function profiles() : UsersIdProfiles
    {
        return new UsersIdProfiles($this->id);
    }
}