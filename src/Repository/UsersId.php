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
     * Retrieve information about a given user. The id can also be the user's email address.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/users/{id}', $request, 'int');
    }
    /**
     * Update a given user.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/users/{id}', $request, 'int');
    }
    /**
     * Delete a given user.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/users/{id}', $request, 'int');
    }
    /**
     * @return UsersIdProfiles
     */
    public function profiles() : UsersIdProfiles
    {
        return new UsersIdProfiles($this->id);
    }
}