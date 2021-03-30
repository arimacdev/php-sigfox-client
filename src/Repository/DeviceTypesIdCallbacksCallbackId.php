<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesIdCallbacksCallbackId
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * The Callback identifier
     */
    protected string $callbackId;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    function __construct(string $id, string $callbackId)
    {
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
    /**
     * Update a callback for a given device type
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/device-types/{id}/callbacks/{callbackId}', $request, 'int');
    }
    /**
     * Delete a callback for a given device type.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/device-types/{id}/callbacks/{callbackId}', $request, 'int');
    }
    /**
     * Enable or disable a callback for a given device type.
     *
     * @param int $request
     * @return int
     */
    function enable(int $request) : int
    {
        return $this->client->request('put', '/device-types/{id}/callbacks/{callbackId}/enable', $request, 'int');
    }
    /**
     * Selects a downlink callback for a device type. The callback will be selected as the downlink one, the one that was previously selected will no longer be used for downlink.
     *
     * @param int $request
     * @return int
     */
    function setDownlink(int $request) : int
    {
        return $this->client->request('put', '/device-types/{id}/callbacks/{callbackId}/downlink', $request, 'int');
    }
    /**
     * Retrieve the last device message error associated with this callback.
     *
     * @param int $request
     * @return int
     */
    function callbacksNotDelivered(int $request) : int
    {
        return $this->client->request('get', '/device-types/{id}/callbacks/{callbackId}/callbacks-not-delivered', $request, 'int');
    }
    /**
     * Disable the sequence number check for the next message of each device of a device type.
     *
     * @param int $request
     * @return int
     */
    function disengage(int $request) : int
    {
        return $this->client->request('put', '/device-types/{id}/disengage', $request, 'int');
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     *
     * @param int $request
     * @return int
     */
    function bulkRestart(int $request) : int
    {
        return $this->client->request('post', '/device-types/{id}/bulk/restart', $request, 'int');
    }
}