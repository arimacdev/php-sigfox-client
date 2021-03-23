<?php

namespace Arimac\Sigfox\Repository;

class ProfilesId
{
    /**
     * The Profile identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Profile identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
}