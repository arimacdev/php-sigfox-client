<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DeviceTypesList;
use Arimac\Sigfox\Request\DeviceTypesCreate;
class DeviceTypes
{
    /**
     * Retrieve a list of device types according to visibility permissions and request filters.
     * 
     */
    public function list(DeviceTypesList $request) : int
    {
        return $this->client->request('get', '/device-types/', $request, 'int');
    }
    /**
     * Create a new device type
     * 
     */
    public function create(DeviceTypesCreate $request) : int
    {
        return $this->client->request('post', '/device-types/', $request, 'int');
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