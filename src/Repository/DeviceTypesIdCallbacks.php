<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksListResponse;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksCreateResponse;
class DeviceTypesIdCallbacks
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
     * Retrieve a list of callbacks for a given device type according to visibility permissions and request filters.
     */
    public function list() : DeviceTypesIdCallbacksListResponse
    {
        return $this->client->request('get', $this->bind('/device-types/{id}/callbacks', $this->id), null, DeviceTypesIdCallbacksListResponse::class);
    }
    /**
     * Create a new callback for a given device type.
     */
    public function create(DeviceTypesIdCallbacksCreate $request) : DeviceTypesIdCallbacksCreateResponse
    {
        return $this->client->request('post', $this->bind('/device-types/{id}/callbacks', $this->id), $request, DeviceTypesIdCallbacksCreateResponse::class);
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
        return new DeviceTypesIdCallbacksCallbackId($this->client, $this->id, $callbackId);
    }
}