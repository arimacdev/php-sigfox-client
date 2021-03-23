<?php

namespace Arimac\Sigfox\Repository;

class ApiUsersIdRenewCredential
{
    /**
     * The API user identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
}