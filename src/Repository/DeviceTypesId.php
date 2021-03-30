<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdCallbacks;
class DeviceTypesId
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a device type.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/device-types/{id}', $request, 'int');
    }
    /**
     * Update a given device type.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/device-types/{id}', $request, 'int');
    }
    /**
     * Delete a given device type.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/device-types/{id}', $request, 'int');
    }
    /**
     * Retrieve a list of messages for a given device types with a 3-day history.
     *
     * @param int $request
     * @return int
     */
    function messages(int $request) : int
    {
        return $this->client->request('get', '/device-types/{id}/messages', $request, 'int');
    }
    /**
     * Retrieve a list of undelivered callback messages for a given device types.
     *
     * @param int $request
     * @return int
     */
    function callbacksNotDelivered(int $request) : int
    {
        return $this->client->request('get', '/device-types/{id}/callbacks-not-delivered', $request, 'int');
    }
    /**
     * @return DeviceTypesIdCallbacks
     */
    public function callbacks() : DeviceTypesIdCallbacks
    {
        return new DeviceTypesIdCallbacks($this->id);
    }
}