<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonDevice;
use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceCreationJob extends SingleDeviceFields
{
    /**
     * The device type's identifier this device is affected
     *
     * @var string
     */
    protected string $deviceTypeId;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected string $pac;
    /**
     * Set to true if the device is a prototype
     *
     * @var bool
     */
    protected ?bool $prototype;
    /**
     * Subscribtion to automatic token renewal
     *
     * @var bool
     */
    protected ?bool $automaticRenewal;
    /**
     * The device is activable and can take a token
     *
     * @var bool
     */
    protected ?bool $activable;
    /**
     * The device's provided latitude
     *
     * @var int
     */
    protected ?int $lat;
    /**
     * The device's provided longitude
     *
     * @var int
     */
    protected ?int $lng;
    /**
     * @param string deviceTypeId The device type's identifier this device is affected
     */
    function setDeviceTypeId(string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @return string The device type's identifier this device is affected
     */
    function getDeviceTypeId() : string
    {
        return $this->deviceTypeId;
    }
    /**
     * @param string pac The device's PAC (Porting Access Code)
     */
    function setPac(string $pac)
    {
        $this->pac = $pac;
    }
    /**
     * @return string The device's PAC (Porting Access Code)
     */
    function getPac() : string
    {
        return $this->pac;
    }
    /**
     * @param bool prototype Set to true if the device is a prototype
     */
    function setPrototype(?bool $prototype)
    {
        $this->prototype = $prototype;
    }
    /**
     * @return bool Set to true if the device is a prototype
     */
    function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * @param bool automaticRenewal Subscribtion to automatic token renewal
     */
    function setAutomaticRenewal(?bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Subscribtion to automatic token renewal
     */
    function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @param bool activable The device is activable and can take a token
     */
    function setActivable(?bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool The device is activable and can take a token
     */
    function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * @param int lat The device's provided latitude
     */
    function setLat(?int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int The device's provided latitude
     */
    function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * @param int lng The device's provided longitude
     */
    function setLng(?int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int The device's provided longitude
     */
    function getLng() : ?int
    {
        return $this->lng;
    }
}