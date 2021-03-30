<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesId;
use Arimac\Sigfox\Repository\DevicesBulk;
class Devices
{
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/devices/', $request, 'int');
    }
    /**
     * Create a new device.
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/devices/', $request, 'int');
    }
    /**
     * @param string $id The Device identifier (hexadecimal format)
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