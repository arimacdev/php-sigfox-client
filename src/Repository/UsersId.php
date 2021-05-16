<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\UsersIdGet;
use Arimac\Sigfox\Definition\User;
use Arimac\Sigfox\Definition\UserUpdate;
use Arimac\Sigfox\Request\UsersIdUpdate;
use Arimac\Sigfox\Definition\UpdateResponse;
class UsersId extends Repository
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The User identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The User identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given user. The id can also be the user's email address.
     *
     * @param UsersIdGet $request The query and body parameters to pass
     *
     * @return User
     */
    public function get(?UsersIdGet $request = null) : User
    {
        return $this->client->call('get', $this->bind('/users/{id}', $this->id), $request, User::class);
    }
    /**
     * Update a given user.
     *
     * @param UserUpdate $user The user to update
     *
     * @return UpdateResponse
     */
    public function update(UserUpdate $user) : UpdateResponse
    {
        $request = new UsersIdUpdate();
        $request->setUser($user);
        return $this->client->call('put', $this->bind('/users/{id}', $this->id), $request, UpdateResponse::class);
    }
    /**
     * Delete a given user.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/users/{id}', $this->id), null);
    }
    /**
     * @return UsersIdProfiles
     */
    public function profiles() : UsersIdProfiles
    {
        return new UsersIdProfiles($this->client, $this->id);
    }
}