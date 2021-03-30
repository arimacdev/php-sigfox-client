<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesId;
use Arimac\Sigfox\Repository\DeviceTypesBulk;
class DeviceTypes
{
    /**
     * Retrieve a list of device types according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/device-types/', $request, 'int');
    }
    /**
     * Create a new device type
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/device-types/', $request, 'int');
    }
    /**
     * @param string $id The Device Type identifier (hexademical format)
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