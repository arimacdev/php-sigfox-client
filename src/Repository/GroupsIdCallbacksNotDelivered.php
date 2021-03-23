<?php

namespace Arimac\Sigfox\Repository;

class GroupsIdCallbacksNotDelivered
{
    /**
     * The Group identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Group identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
}