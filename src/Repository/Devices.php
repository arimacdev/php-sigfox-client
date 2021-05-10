<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Request\DevicesCreate;
class Devices
{
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     * 
     */
    public function list(DevicesList $request) : int
    {
        return $this->client->request('get', '/devices/', $request, 'int');
    }
    /**
     * Create a new device.
     * 
     */
    public function create(DevicesCreate $request) : int
    {
        return $this->client->request('post', '/devices/', $request, 'int');
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
        return new DevicesId($id);
    }
    /**
     * @return DevicesBulk
     */
    public function bulk() : DevicesBulk
    {
        return new DevicesBulk();
    }
}