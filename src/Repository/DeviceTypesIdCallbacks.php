<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCreate;
class DeviceTypesIdCallbacks
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
     * Retrieve a list of callbacks for a given device type according to visibility permissions and request filters.
     * 
     */
    public function list() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/device-types/{id}/callbacks', $this->id), null, 'int');
    }
    /**
     * Create a new callback for a given device type.
     * 
     */
    public function create(DeviceTypesIdCallbacksCreate $request) : int
    {
        return $this->client->request('post', $this->bindUrlParams('/device-types/{id}/callbacks', $this->id), $request, 'int');
    }
    /**
     * Find by callbackId
     *
     * @param string $callbackId The Callback identifier
     *
     * @return DeviceTypesIdCallbacksCallbackId
     */
    public function find(string $callbackId) : DeviceTypesIdCallbacksCallbackId
    {
        return new DeviceTypesIdCallbacksCallbackId($this->id, $callbackId);
    }
}