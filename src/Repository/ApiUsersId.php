<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ApiUsersIdProfiles;
class ApiUsersId
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
    /**
     * Retrieve information about a given API user.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/api-users/{id}', $request, 'int');
    }
    /**
     * Update information about a given API user.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/api-users/{id}', $request, 'int');
    }
    /**
     * Delete a given API user.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/api-users/{id}', $request, 'int');
    }
    /**
     * @return ApiUsersIdProfiles
     */
    public function profiles() : ApiUsersIdProfiles
    {
        return new ApiUsersIdProfiles($this->id);
    }
}