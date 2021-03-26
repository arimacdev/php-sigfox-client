<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesBulkRestart;
class DeviceTypesBulk
{
    /**
     * @return DeviceTypesBulkRestart
     */
    public function restart() : DeviceTypesBulkRestart
    {
        return new DeviceTypesBulkRestart();
    }
}