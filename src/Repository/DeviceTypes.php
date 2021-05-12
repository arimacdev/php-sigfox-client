<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DeviceTypesList;
use Arimac\Sigfox\Response\Generated\DeviceTypesListResponse;
use Arimac\Sigfox\Request\DeviceTypesCreate;
use Arimac\Sigfox\Response\Generated\DeviceTypesCreateResponse;
class DeviceTypes
{
    /**
     * Retrieve a list of device types according to visibility permissions and request filters.
     * 
     */
    public function list(DeviceTypesList $request) : DeviceTypesListResponse
    {
        return $this->client->request('get', '/device-types/', $request, DeviceTypesListResponse::class);
    }
    /**
     * Create a new device type
     * 
     */
    public function create(DeviceTypesCreate $request) : DeviceTypesCreateResponse
    {
        return $this->client->request('post', '/device-types/', $request, DeviceTypesCreateResponse::class);
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
        return new DeviceTypesId($id);
    }
    /**
     * @return DeviceTypesBulk
     */
    public function bulk() : DeviceTypesBulk
    {
        return new DeviceTypesBulk();
    }
}