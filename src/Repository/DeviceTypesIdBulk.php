<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdBulkRestart;
class DeviceTypesIdBulk
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return DeviceTypesIdBulkRestart
     */
    public function restart() : DeviceTypesIdBulkRestart
    {
        return new DeviceTypesIdBulkRestart($this->id);
    }
}