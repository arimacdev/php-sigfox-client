<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesId;
use Arimac\Sigfox\Repository\DeviceTypesBulk;
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
    /**
     * @return DeviceTypesBulk
     */
    public function bulk() : DeviceTypesBulk
    {
        return new DeviceTypesBulk();
    }
}