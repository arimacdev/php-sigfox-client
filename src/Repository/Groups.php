<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\GroupsId;
class Groups
{
    /**
     * @param string $id The Group identifier
     * @return GroupsId
     */
    public function find(string $id) : GroupsId
    {
        return new GroupsId($id);
    }
}