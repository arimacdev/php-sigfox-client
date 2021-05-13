<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DeviceTypesIdGet;
use Arimac\Sigfox\Definition\DeviceType;
use Arimac\Sigfox\Request\DeviceTypesIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdMessages;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdMessagesResponse;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdBulkRestartResponse;
class DeviceTypesId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Device Type identifier (hexademical format)
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device Type identifier (hexademical format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a device type.
     */
    public function get(DeviceTypesIdGet $request) : DeviceType
    {
        return $this->client->request('get', $this->bind('/device-types/{id}', $this->id), $request, DeviceType::class);
    }
    /**
     * Update a given device type.
     */
    public function update(DeviceTypesIdUpdate $request)
    {
        return $this->client->request('put', $this->bind('/device-types/{id}', $this->id), $request);
    }
    /**
     * Delete a given device type.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/device-types/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of messages for a given device types with a 3-day history.
     */
    public function messages(DeviceTypesIdMessages $request) : DeviceTypesIdMessagesResponse
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/messages', $this->id), $request, DeviceTypesIdMessagesResponse::class);
    }
    /**
     * Retrieve a list of undelivered callback messages for a given device types.
     */
    public function callbacksNotDelivered(DeviceTypesIdCallbacksNotDelivered $request) : DeviceTypesIdCallbacksNotDeliveredResponse
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/callbacks-not-delivered', $this->id), $request, DeviceTypesIdCallbacksNotDeliveredResponse::class);
    }
    /**
     * @return DeviceTypesIdCallbacks
     */
    public function callbacks() : DeviceTypesIdCallbacks
    {
        return new DeviceTypesIdCallbacks($this->client, $this->id);
    }
    /**
     * Disable the sequence number check for the next message of each device of a device type.
     */
    public function disengage()
    {
        return $this->client->request('put', $this->bind('/device-types/{id}/disengage', $this->id), null);
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     */
    public function bulkRestart() : DeviceTypesIdBulkRestartResponse
    {
        return $this->client->request('post', $this->bind('/device-types/{id}/bulk/restart', $this->id), null, DeviceTypesIdBulkRestartResponse::class);
    }
}