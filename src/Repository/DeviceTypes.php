<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DeviceTypesList;
use Arimac\Sigfox\Response\Generated\DeviceTypesListResponse;
use Arimac\Sigfox\Definition\DeviceTypeCreate;
use Arimac\Sigfox\Request\DeviceTypesCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesCreateResponse;
class DeviceTypes extends Repository
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
     * Retrieve a list of device types according to visibility permissions and request filters.
     *
     * @param DeviceTypesList $request The query and body parameters to pass
     *
     * @return DeviceTypesListResponse
     */
    public function list(?DeviceTypesList $request = null) : DeviceTypesListResponse
    {
        return $this->client->call('get', '/device-types/', $request, DeviceTypesListResponse::class);
    }
    /**
     * Create a new device type
     *
     * @param DeviceTypeCreate $deviceType The device type to create
     *
     * @return DeviceTypesCreateResponse
     */
    public function create(DeviceTypeCreate $deviceType) : DeviceTypesCreateResponse
    {
        $request = new DeviceTypesCreate();
        $request->setDeviceType($deviceType);
        return $this->client->call('post', '/device-types/', $request, DeviceTypesCreateResponse::class);
    }
    /**
     * Find by id
     *
     * @param string $id The Device Type identifier (hexademical format)
     *
     * @return DeviceTypesId
     */
    public function find(string $id) : DeviceTypesId
    {
        return new DeviceTypesId($this->client, $id);
    }
    /**
     * @return DeviceTypesBulk
     */
    public function bulk() : DeviceTypesBulk
    {
        return new DeviceTypesBulk($this->client);
    }
}