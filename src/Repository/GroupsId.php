<?php

namespace Arimac\Sigfox\Repository;

class GroupsId
{
    /**
     * The Group identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Group identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given group.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/groups/{id}', $request, 'int');
    }
    /**
     * Update a given group.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/groups/{id}', $request, 'int');
    }
    /**
     * Delete a given group.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/groups/{id}', $request, 'int');
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given group, in reverse chronological order (most recent message first).
     *
     * @param int $request
     * @return int
     */
    function callbacksNotDelivered(int $request) : int
    {
        return $this->client->request('get', '/groups/{id}/callbacks-not-delivered', $request, 'int');
    }
    /**
     * Retrieve a list of geolocation payload according to request filters.
     *
     * @param int $request
     * @return int
     */
    function geolocationPayloads(int $request) : int
    {
        return $this->client->request('get', '/groups/{id}/geoloc-payloads', $request, 'int');
    }
}