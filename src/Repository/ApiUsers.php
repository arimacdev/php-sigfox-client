<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ApiUsersId;
class ApiUsers
{
    /**
     * @param string $id The API user identifier
     * @return ApiUsersId
     */
    public function find(string $id) : ApiUsersId
    {
        return new ApiUsersId($id);
    }
}