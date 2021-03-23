<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesId;
class DeviceTypes
{
    /**
     * @param string $id The Device Type identifier (hexademical format)
     * @return DeviceTypesId
     */
    public function find(string $id) : DeviceTypesId
    {
        return new DeviceTypesId($id);
    }
}