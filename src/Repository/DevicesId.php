<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdCallbacksNotDelivered;
use Arimac\Sigfox\Repository\DevicesIdCertificate;
use Arimac\Sigfox\Repository\DevicesIdProductCertificate;
use Arimac\Sigfox\Repository\DevicesIdConsumption;
use Arimac\Sigfox\Repository\DevicesIdDisengage;
use Arimac\Sigfox\Repository\DevicesIdMessages;
use Arimac\Sigfox\Repository\DevicesIdLocations;
use Arimac\Sigfox\Repository\DevicesIdUnsubscribe;
class DevicesId
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return DevicesIdCallbacksNotDelivered
     */
    public function callbacksNotDelivered() : DevicesIdCallbacksNotDelivered
    {
        return new DevicesIdCallbacksNotDelivered($this->id);
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->id);
    }
    /**
     * @return DevicesIdProductCertificate
     */
    public function productCertificate() : DevicesIdProductCertificate
    {
        return new DevicesIdProductCertificate($this->id);
    }
    /**
     * @return DevicesIdConsumption
     */
    public function consumption() : DevicesIdConsumption
    {
        return new DevicesIdConsumption($this->id);
    }
    /**
     * @return DevicesIdDisengage
     */
    public function disengage() : DevicesIdDisengage
    {
        return new DevicesIdDisengage($this->id);
    }
    /**
     * @return DevicesIdMessages
     */
    public function messages() : DevicesIdMessages
    {
        return new DevicesIdMessages($this->id);
    }
    /**
     * @return DevicesIdLocations
     */
    public function locations() : DevicesIdLocations
    {
        return new DevicesIdLocations($this->id);
    }
    /**
     * @return DevicesIdUnsubscribe
     */
    public function unsubscribe() : DevicesIdUnsubscribe
    {
        return new DevicesIdUnsubscribe($this->id);
    }
}