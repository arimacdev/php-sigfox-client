<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksCallbackIdEnable;
use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksCallbackIdDownlink;
use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered;
class DeviceTypesIdCallbacksCallbackId
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * The Callback identifier
     */
    protected string $callbackId;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    function __construct(string $id, string $callbackId)
    {
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
    /**
     * @return DeviceTypesIdCallbacksCallbackIdEnable
     */
    public function enable() : DeviceTypesIdCallbacksCallbackIdEnable
    {
        return new DeviceTypesIdCallbacksCallbackIdEnable($this->id, $this->callbackId);
    }
    /**
     * @return DeviceTypesIdCallbacksCallbackIdDownlink
     */
    public function downlink() : DeviceTypesIdCallbacksCallbackIdDownlink
    {
        return new DeviceTypesIdCallbacksCallbackIdDownlink($this->id, $this->callbackId);
    }
    /**
     * @return DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered
     */
    public function callbacksNotDelivered() : DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered
    {
        return new DeviceTypesIdCallbacksCallbackIdCallbacksNotDelivered($this->id, $this->callbackId);
    }
}