<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ApiUsersIdGet;
use Arimac\Sigfox\Request\ApiUsersIdUpdate;
class ApiUsersId
{
    /**
     * The API user identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The API user identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given API user.
     * 
     */
    public function get(ApiUsersIdGet $request) : int
    {
        return $this->client->request('get', $this->bind('/api-users/{id}', $this->id), $request, 'int');
    }
    /**
     * Update information about a given API user.
     * 
     */
    public function update(ApiUsersIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bind('/api-users/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given API user.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bind('/api-users/{id}', $this->id), null, 'int');
    }
    /**
     * @return ApiUsersIdProfiles
     */
    public function profiles() : ApiUsersIdProfiles
    {
        return new ApiUsersIdProfiles($this->id);
    }
    /**
     * Generate a new password for a given API user.
     * 
     */
    public function renewCredential() : int
    {
        return $this->client->request('put', $this->bind('/api-users/{id}/renew-credential', $this->id), null, 'int');
    }
}