<?php

namespace Arimac\Sigfox\Repository;

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