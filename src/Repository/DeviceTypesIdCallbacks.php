<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksCallbackId;
class DeviceTypesIdCallbacks
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
     * Retrieve a list of callbacks for a given device type according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/device-types/{id}/callbacks', $request, 'int');
    }
    /**
     * Create a new callback for a given device type.
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/device-types/{id}/callbacks', $request, 'int');
    }
    /**
     * @param string $callbackId The Callback identifier
     * @return DeviceTypesIdCallbacksCallbackId
     */
    public function find(string $callbackId) : DeviceTypesIdCallbacksCallbackId
    {
        return new DeviceTypesIdCallbacksCallbackId($this->id, $callbackId);
    }
}