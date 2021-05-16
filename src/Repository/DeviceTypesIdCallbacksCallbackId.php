<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\UpdateCallback;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdEnable;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered;
use Arimac\Sigfox\Definition\ErrorMessages;
class DeviceTypesIdCallbacksCallbackId extends Repository
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
     * The Callback identifier
     *
     * @internal
     */
    protected ?string $callbackId;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param UpdateCallback $callback The callback to update
     */
    public function update(UpdateCallback $callback)
    {
        $request = new DeviceTypesIdCallbacksCallbackIdUpdate();
        $request->setCallback($callback);
        return $this->client->call('put', $this->bind('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), $request);
    }
    /**
     * Delete a callback for a given device type.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), null);
    }
    /**
     * Enable or disable a callback for a given device type.
     *
     * @param bool $enabled True to enable the callback, false to disable it
     */
    public function enable(bool $enabled)
    {
        $request = new DeviceTypesIdCallbacksCallbackIdEnable();
        $request->setEnabled($enabled);
        return $this->client->call('put', $this->bind('/device-types/{id}/callbacks/{callbackId}/enable', $this->id, $this->callbackId), $request);
    }
    /**
     * Selects a downlink callback for a device type. The callback will be selected as the downlink one, the one that
     * was previously selected will no longer be used for downlink.
     */
    public function setDownlink()
    {
        return $this->client->call('put', $this->bind('/device-types/{id}/callbacks/{callbackId}/downlink', $this->id, $this->callbackId), null);
    }
    /**
     * Retrieve the last device message error associated with this callback.
     *
     * @param DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return ErrorMessages
     */
    public function callbacksNotDelivered(?DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request = null) : ErrorMessages
    {
        return $this->client->call('get', $this->bind('/device-types/{id}/callbacks/{callbackId}/callbacks-not-delivered', $this->id, $this->callbackId), $request, ErrorMessages::class);
    }
}