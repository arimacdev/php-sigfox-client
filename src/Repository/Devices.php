<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Response\Generated\DevicesListResponse;
use Arimac\Sigfox\Request\DevicesCreate;
use Arimac\Sigfox\Response\Generated\DevicesCreateResponse;
class Devices
{
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     * 
     */
    public function list(DevicesList $request) : DevicesListResponse
    {
        return $this->client->request('get', '/devices/', $request, DevicesListResponse::class);
    }
    /**
     * Create a new device.
     * 
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