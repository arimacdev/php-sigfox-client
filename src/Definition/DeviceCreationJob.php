<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonDevice;
use Arimac\Sigfox\Definition\SingleDeviceFields;
class DeviceCreationJob extends CommonDevice
{
    use SingleDeviceFields;
    protected $required = array('deviceTypeId', 'pac');
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
    protected ?bool $prototype = null;
    /**
     * Subscribtion to automatic token renewal
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * The device is activable and can take a token
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * The device's provided latitude
     *
     * @var float
     */
    protected ?float $lat = null;
    /**
     * The device's provided longitude
     *
     * @var float
     */
    protected ?float $lng = null;
    /**
     * @param string $deviceTypeId The device type's identifier this device is affected
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
     * @param string $pac The device's PAC (Porting Access Code)
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
     * @param bool $prototype Set to true if the device is a prototype
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
     * @param bool $automaticRenewal Subscribtion to automatic token renewal
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
     * @param bool $activable The device is activable and can take a token
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
     * @param float $lat The device's provided latitude
     */
    function setLat(?float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return float The device's provided latitude
     */
    function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * @param float $lng The device's provided longitude
     */
    function setLng(?float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return float The device's provided longitude
     */
    function getLng() : ?float
    {
        return $this->lng;
    }
}