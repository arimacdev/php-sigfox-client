<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\UsersId;
class Users
{
    /**
     * @param string $id The User identifier
     * @return UsersId
     */
    public function find(string $id) : UsersId
    {
        return new UsersId($id);
    }
}