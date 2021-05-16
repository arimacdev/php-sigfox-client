<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksListResponse;
use Arimac\Sigfox\Definition\CreateCallback;
use Arimac\Sigfox\Request\DeviceTypesIdCallbacksCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesIdCallbacksCreateResponse;
class DeviceTypesIdCallbacks extends Repository
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
     * Retrieve a list of callbacks for a given device type according to visibility permissions and request filters.
     *
     * @return DeviceTypesIdCallbacksListResponse
     */
    public function list() : DeviceTypesIdCallbacksListResponse
    {
        return $this->client->call('get', $this->bind('/device-types/{id}/callbacks', $this->id), null, DeviceTypesIdCallbacksListResponse::class);
    }
    /**
     * Create a new callback for a given device type.
     *
     * @param CreateCallback $callback
     *
     * @return DeviceTypesIdCallbacksCreateResponse
     */
    public function create(CreateCallback $callback) : DeviceTypesIdCallbacksCreateResponse
    {
        $request = new DeviceTypesIdCallbacksCreate();
        $request->setCallback($callback);
        return $this->client->call('post', $this->bind('/device-types/{id}/callbacks', $this->id), $request, DeviceTypesIdCallbacksCreateResponse::class);
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