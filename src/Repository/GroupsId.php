<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\GroupsIdGet;
use Arimac\Sigfox\Request\GroupsIdUpdate;
use Arimac\Sigfox\Request\GroupsIdCallbacksNotDelivered;
use Arimac\Sigfox\Request\GroupsIdGeolocationPayloads;
class GroupsId
{
    /**
     * The Group identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Group identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given group.
     * 
     */
    public function get(GroupsIdGet $request) : int
    {
        return $this->client->request('get', $this->bind('/groups/{id}', $this->id), $request, 'int');
    }
    /**
     * Update a given group.
     * 
     */
    public function update(GroupsIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bind('/groups/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given group.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bind('/groups/{id}', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most recent
     * message first).
     * 
     */
    public function callbacksNotDelivered(GroupsIdCallbacksNotDelivered $request) : int
    {
        return $this->client->request('get', $this->bind('/groups/{id}/callbacks-not-delivered', $this->id), $request, 'int');
    }
    /**
     * Retrieve a list of geolocation payload according to request filters.
     * 
     */
    public function geolocationPayloads(GroupsIdGeolocationPayloads $request) : int
    {
        return $this->client->request('get', $this->bind('/groups/{id}/geoloc-payloads', $this->id), $request, 'int');
    }
}