<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DeviceTypesIdGet;
use Arimac\Sigfox\Definition\DeviceType;
use Arimac\Sigfox\Definition\DeviceTypeUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdMessages;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdMessagesResponse;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdBulkRestartResponse;
class DeviceTypesId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Device Type identifier (hexademical format)
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
     * @param string $id     The Device Type identifier (hexademical format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a device type.
     *
     * @param DeviceTypesIdGet $request The query and body parameters to pass
     *
     * @return DeviceType
     */
    public function get(?DeviceTypesIdGet $request = null) : DeviceType
    {
        return $this->client->call('get', $this->bind('/device-types/{id}', $this->id), $request, DeviceType::class);
    }
    /**
     * Update a given device type.
     *
     * @param DeviceTypeUpdate $deviceType The device type to update
     */
    public function update(DeviceTypeUpdate $deviceType)
    {
        $request = new DeviceTypesIdUpdate();
        $request->setDeviceType($deviceType);
        return $this->client->call('put', $this->bind('/device-types/{id}', $this->id), $request);
    }
    /**
     * Delete a given device type.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/device-types/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of messages for a given device types with a 3-day history.
     *
     * @param DeviceTypesIdMessages $request The query and body parameters to pass
     *
     * @return DeviceTypesIdMessagesResponse
     */
    public function messages(?DeviceTypesIdMessages $request = null) : DeviceTypesIdMessagesResponse
    {
        return $this->client->call('get', $this->bind('/device-types/{id}/messages', $this->id), $request, DeviceTypesIdMessagesResponse::class);
    }
    /**
     * Retrieve a list of undelivered callback messages for a given device types.
     *
     * @param DeviceTypesIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return DeviceTypesIdCallbacksNotDeliveredResponse
     */
    public function callbacksNotDelivered(?DeviceTypesIdCallbacksNotDelivered $request = null) : DeviceTypesIdCallbacksNotDeliveredResponse
    {
        return $this->client->call('get', $this->bind('/device-types/{id}/callbacks-not-delivered', $this->id), $request, DeviceTypesIdCallbacksNotDeliveredResponse::class);
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
        return $this->client->call('put', $this->bind('/device-types/{id}/disengage', $this->id), null);
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     *
     * @return DeviceTypesIdBulkRestartResponse
     */
    public function bulkRestart() : DeviceTypesIdBulkRestartResponse
    {
        return $this->client->call('post', $this->bind('/device-types/{id}/bulk/restart', $this->id), null, DeviceTypesIdBulkRestartResponse::class);
    }
}