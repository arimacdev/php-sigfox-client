<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdUpdate;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdEnable;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered;
class DeviceTypesIdCallbacksCallbackId
{
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
     * @param string $id The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    public function __construct(string $id, string $callbackId)
    {
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
    /**
     * Update a callback for a given device type
     * 
     */
    public function update(DeviceTypesIdCallbacksCallbackIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bindUrlParams('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), $request, 'int');
    }
    /**
     * Delete a callback for a given device type.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bindUrlParams('/device-types/{id}/callbacks/{callbackId}', $this->id, $this->callbackId), null, 'int');
    }
    /**
     * Enable or disable a callback for a given device type.
     * 
     */
    public function enable(DeviceTypesIdCallbacksCallbackIdEnable $request) : int
    {
        return $this->client->request('put', $this->bindUrlParams('/device-types/{id}/callbacks/{callbackId}/enable', $this->id, $this->callbackId), $request, 'int');
    }
    /**
     * Selects a downlink callback for a device type. The callback will be selected as the downlink one, the one that was
     * previously selected will no longer be used for downlink.
     * 
     */
    public function setDownlink() : int
    {
        return $this->client->request('put', $this->bindUrlParams('/device-types/{id}/callbacks/{callbackId}/downlink', $this->id, $this->callbackId), null, 'int');
    }
    /**
     * Retrieve the last device message error associated with this callback.
     */
    public function callbacksNotDelivered(DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/device-types/{id}/callbacks/{callbackId}/callbacks-not-delivered', $this->id, $this->callbackId), $request, 'int');
    }
    /**
     * Disable the sequence number check for the next message of each device of a device type.
     * 
     */
    public function disengage() : int
    {
        return $this->client->request('put', $this->bindUrlParams('/device-types/{id}/disengage', $this->id, $this->callbackId), null, 'int');
    }
    /**
     * Restart the devices of a device type with a asynchronous job.
     * 
     */
    public function bulkRestart() : int
    {
        return $this->client->request('post', $this->bindUrlParams('/device-types/{id}/bulk/restart', $this->id, $this->callbackId), null, 'int');
    }
}