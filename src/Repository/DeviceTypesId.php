<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesIdMessages;
use Arimac\Sigfox\Repository\DeviceTypesIdCallbacksNotDelivered;
use Arimac\Sigfox\Repository\DeviceTypesIdCallbacks;
use Arimac\Sigfox\Repository\DeviceTypesIdDisengage;
use Arimac\Sigfox\Repository\DeviceTypesIdBulk;
class DeviceTypesId
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
     * @return DeviceTypesIdMessages
     */
    public function messages() : DeviceTypesIdMessages
    {
        return new DeviceTypesIdMessages($this->id);
    }
    /**
     * @return DeviceTypesIdCallbacksNotDelivered
     */
    public function callbacksNotDelivered() : DeviceTypesIdCallbacksNotDelivered
    {
        return new DeviceTypesIdCallbacksNotDelivered($this->id);
    }
    /**
     * @return DeviceTypesIdCallbacks
     */
    public function callbacks() : DeviceTypesIdCallbacks
    {
        return new DeviceTypesIdCallbacks($this->id);
    }
    /**
     * @return DeviceTypesIdDisengage
     */
    public function disengage() : DeviceTypesIdDisengage
    {
        return new DeviceTypesIdDisengage($this->id);
    }
    /**
     * @return DeviceTypesIdBulk
     */
    public function bulk() : DeviceTypesIdBulk
    {
        return new DeviceTypesIdBulk($this->id);
    }
}