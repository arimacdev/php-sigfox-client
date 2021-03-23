<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksCallbackId;
class DeviceTypesIdCallbacks
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
     * @param string $callbackId The Callback identifier
     * @return DeviceTypesIdCallbacksCallbackId
     */
    public function find(string $callbackId) : DeviceTypesIdCallbacksCallbackId
    {
        return new DeviceTypesIdCallbacksCallbackId($this->id, $callbackId);
    }
}