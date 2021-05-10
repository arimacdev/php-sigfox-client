<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\UsersIdGet;
use Arimac\Sigfox\Request\UsersIdUpdate;
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
    public function get(UsersIdGet $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/users/{id}', $this->id), $request, 'int');
    }
    /**
     * Update a given user.
     * 
     */
    public function update(UsersIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bindUrlParams('/users/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given user.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bindUrlParams('/users/{id}', $this->id), null, 'int');
    }
    /**
     * @return UsersIdProfiles
     */
    public function profiles() : UsersIdProfiles
    {
        return new UsersIdProfiles($this->id);
    }
}