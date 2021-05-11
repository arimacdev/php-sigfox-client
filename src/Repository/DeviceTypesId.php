<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DeviceTypesIdGet;
use Arimac\Sigfox\Request\DeviceTypesIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdMessages;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksNotDelivered;
class DeviceTypesId
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a device type.
     * 
     */
    public function get(DeviceTypesIdGet $request) : int
    {
        return $this->client->request('get', $this->bind('/device-types/{id}', $this->id), $request, 'int');
    }
    /**
     * Update a given device type.
     * 
     */
    public function update(DeviceTypesIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bind('/device-types/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given device type.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bind('/device-types/{id}', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of messages for a given device types with a 3-day history.
     * 
     */
    public function messages(DeviceTypesIdMessages $request) : int
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/messages', $this->id), $request, 'int');
    }
    /**
     * Retrieve a list of undelivered callback messages for a given device types.
     * 
     */
    public function callbacksNotDelivered(DeviceTypesIdCallbacksNotDelivered $request) : int
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/callbacks-not-delivered', $this->id), $request, 'int');
    }
    /**
     * @return DeviceTypesIdCallbacks
     */
    public function callbacks() : DeviceTypesIdCallbacks
    {
        return new DeviceTypesIdCallbacks($this->id);
    }
    /**
     * Disable the sequence number check for the next message of each device of a device type.
     * 
     */
    public function disengage() : int
    {
        return $this->client->request('put', $this->bind('/device-types/{id}/disengage', $this->id), null, 'int');
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     * 
     */
    public function bulkRestart() : int
    {
        return $this->client->request('post', $this->bind('/device-types/{id}/bulk/restart', $this->id), null, 'int');
    }
}