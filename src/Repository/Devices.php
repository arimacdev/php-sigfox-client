<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Response\Generated\DevicesListResponse;
use Arimac\Sigfox\Request\DevicesCreate;
use Arimac\Sigfox\Response\Generated\DevicesCreateResponse;
class Devices
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     */
    public function list(DevicesList $request) : DevicesListResponse
    {
        return $this->client->request('get', '/devices/', $request, DevicesListResponse::class);
    }
    /**
     * Create a new device.
     */
    public function create(DevicesCreate $request) : DevicesCreateResponse
    {
        return $this->client->request('post', '/devices/', $request, DevicesCreateResponse::class);
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