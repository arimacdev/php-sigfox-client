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
    /**
     * Retrieve information about a given profile.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/profiles/{id}', $request, 'int');
    }
}