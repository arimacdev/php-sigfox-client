<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesId;
use Arimac\Sigfox\Repository\DevicesBulk;
class Devices
{
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