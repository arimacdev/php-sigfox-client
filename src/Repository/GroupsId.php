<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\GroupsIdGet;
use Arimac\Sigfox\Definition\Group;
use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Request\GroupsIdUpdate;
use Arimac\Sigfox\Request\GroupsIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\GroupsIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Request\GroupsIdGeolocationPayloads;
use Arimac\Sigfox\Response\Generated\GroupsIdGeolocationPayloadsResponse;
class GroupsId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Group identifier
     *
     * @internal
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param GroupsIdGet $request The query and body parameters to pass
     *
     * @return Group
     */
    public function get(?GroupsIdGet $request = null) : Group
    {
        return $this->client->call('get', $this->bind('/groups/{id}', $this->id), $request, Group::class);
    }
    /**
     * Update a given group.
     *
     * @param CommonGroupUpdate $group The group to update
     */
    public function update(CommonGroupUpdate $group)
    {
        $request = new GroupsIdUpdate();
        $request->setGroup($group);
        return $this->client->call('put', $this->bind('/groups/{id}', $this->id), $request);
    }
    /**
     * Delete a given group.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/groups/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most
     * recent message first).
     *
     * @param GroupsIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return GroupsIdCallbacksNotDeliveredResponse
     */
    public function callbacksNotDelivered(?GroupsIdCallbacksNotDelivered $request = null) : GroupsIdCallbacksNotDeliveredResponse
    {
        return $this->client->call('get', $this->bind('/groups/{id}/callbacks-not-delivered', $this->id), $request, GroupsIdCallbacksNotDeliveredResponse::class);
    }
    /**
     * Retrieve a list of geolocation payload according to request filters.
     *
     * @param GroupsIdGeolocationPayloads $request The query and body parameters to pass
     *
     * @return GroupsIdGeolocationPayloadsResponse
     */
    public function geolocationPayloads(?GroupsIdGeolocationPayloads $request = null) : GroupsIdGeolocationPayloadsResponse
    {
        return $this->client->call('get', $this->bind('/groups/{id}/geoloc-payloads', $this->id), $request, GroupsIdGeolocationPayloadsResponse::class);
    }
}