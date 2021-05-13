<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\GroupsIdGet;
use Arimac\Sigfox\Definition\Group;
use Arimac\Sigfox\Request\GroupsIdUpdate;
use Arimac\Sigfox\Request\GroupsIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\GroupsIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Request\GroupsIdGeolocationPayloads;
use Arimac\Sigfox\Response\Generated\GroupsIdGeolocationPayloadsResponse;
class GroupsId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Group identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Group identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given group.
     */
    public function get(GroupsIdGet $request) : Group
    {
        return $this->client->request('get', $this->bind('/groups/{id}', $this->id), $request, Group::class);
    }
    /**
     * Update a given group.
     */
    public function update(GroupsIdUpdate $request)
    {
        return $this->client->request('put', $this->bind('/groups/{id}', $this->id), $request);
    }
    /**
     * Delete a given group.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/groups/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most recent
     * message first).
     */
    public function callbacksNotDelivered(GroupsIdCallbacksNotDelivered $request) : GroupsIdCallbacksNotDeliveredResponse
    {
        return $this->client->request('get', $this->bind('/groups/{id}/callbacks-not-delivered', $this->id), $request, GroupsIdCallbacksNotDeliveredResponse::class);
    }
    /**
     * Retrieve a list of geolocation payload according to request filters.
     */
    public function geolocationPayloads(GroupsIdGeolocationPayloads $request) : GroupsIdGeolocationPayloadsResponse
    {
        return $this->client->request('get', $this->bind('/groups/{id}/geoloc-payloads', $this->id), $request, GroupsIdGeolocationPayloadsResponse::class);
    }
}