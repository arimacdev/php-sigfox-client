<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersIdGet;
use Arimac\Sigfox\Definition\User;
use Arimac\Sigfox\Request\UsersIdUpdate;
use Arimac\Sigfox\Definition\UpdateResponse;
class UsersId
{
    /**
     * The User identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The User identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given user. The id can also be the user's email address.
     * 
     */
    public function get(UsersIdGet $request) : User
    {
        return $this->client->request('get', $this->bind('/users/{id}', $this->id), $request, User::class);
    }
    /**
     * Update a given user.
     * 
     */
    public function update(UsersIdUpdate $request) : UpdateResponse
    {
        return $this->client->request('put', $this->bind('/users/{id}', $this->id), $request, UpdateResponse::class);
    }
    /**
     * Delete a given user.
     * 
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/users/{id}', $this->id), null);
    }
    /**
     * @return UsersIdProfiles
     */
    public function profiles() : UsersIdProfiles
    {
        return new UsersIdProfiles($this->id);
    }
}