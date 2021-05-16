<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Response\Generated\DevicesListResponse;
use Arimac\Sigfox\Definition\DeviceCreationJob;
use Arimac\Sigfox\Request\DevicesCreate;
use Arimac\Sigfox\Response\Generated\DevicesCreateResponse;
class Devices extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param DevicesList $request The query and body parameters to pass
     *
     * @return DevicesListResponse
     */
    public function list(?DevicesList $request = null) : DevicesListResponse
    {
        return $this->client->call('get', '/devices/', $request, DevicesListResponse::class);
    }
    /**
     * Create a new device.
     *
     * @param DeviceCreationJob $device The device to create
     *
     * @return DevicesCreateResponse
     */
    public function create(DeviceCreationJob $device) : DevicesCreateResponse
    {
        $request = new DevicesCreate();
        $request->setDevice($device);
        return $this->client->call('post', '/devices/', $request, DevicesCreateResponse::class);
    }
    /**
     * Find by id
     *
     * @param string $id The Device identifier (hexadecimal format)
     *
     * @return DevicesId
     */
    public function find(string $id) : DevicesId
    {
        return new DevicesId($this->client, $id);
    }
    /**
     * @return DevicesBulk
     */
    public function bulk() : DevicesBulk
    {
        return new DevicesBulk($this->client);
    }
}