<?php

namespace Arimac\Sigfox\Repository;

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
}