<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdEnable;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered;
use Arimac\Sigfox\Definition\ErrorMessages;
class DeviceTypesIdCallbacksCallbackId
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
     * The Callback identifier
     */
    protected ?string $callbackId;
    /**
     * Creating the repository
     *
     * @param Client $client     The HTTP client
     * @param string $id         The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    public function __construct(Client $client, string $id, string $callbackId)
    {
        $this->client = $client;
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
    /**
     * Update a callback for a given device type
     */
    public function update(DeviceTypesIdCallbacksCallbackIdUpdate $request)
    {
        return $this->client->request('put', $this->bind('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), $request);
    }
    /**
     * Delete a callback for a given device type.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), null);
    }
    /**
     * Enable or disable a callback for a given device type.
     */
    public function enable(DeviceTypesIdCallbacksCallbackIdEnable $request)
    {
        return $this->client->request('put', $this->bind('/device-types/{id}/callbacks/{callbackId}/enable', $this->id, $this->callbackId), $request);
    }
    /**
     * Selects a downlink callback for a device type. The callback will be selected as the downlink one, the one that was
     * previously selected will no longer be used for downlink.
     */
    public function setDownlink()
    {
        return $this->client->request('put', $this->bind('/device-types/{id}/callbacks/{callbackId}/downlink', $this->id, $this->callbackId), null);
    }
    /**
     * Retrieve the last device message error associated with this callback.
     */
    public function callbacksNotDelivered(DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request) : ErrorMessages
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/callbacks/{callbackId}/callbacks-not-delivered', $this->id, $this->callbackId), $request, ErrorMessages::class);
    }
}