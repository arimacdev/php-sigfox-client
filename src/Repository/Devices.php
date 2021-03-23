<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesId;
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
}