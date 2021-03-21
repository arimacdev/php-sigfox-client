<?php

namespace Arimac\Sigfox\Definition\BulkDeviceAsynchronousRequest;

use Arimac\Sigfox\Definition;
/**
 * Describes the individual fields of devices created in an ansynchronous bulk request
 */
class DataItem extends Definition
{
    protected $required = array('id');
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected string $id;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected ?string $pac = null;
    /**
     * The device's name
     *
     * @var string
     */
    protected ?string $name = null;
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
     * Value describing if the device is permitted to automatically renew its token
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
    /**
     * Value describing if the devices are activable and can recover a token
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * @param string $id The device's identifier (hexadecimal format)
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The device's identifier (hexadecimal format)
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string $pac The device's PAC (Porting Access Code)
     */
    function setPac(?string $pac)
    {
        $this->pac = $pac;
    }
    /**
     * @return string The device's PAC (Porting Access Code)
     */
    function getPac() : ?string
    {
        return $this->pac;
    }
    /**
     * @param string $name The device's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The device's name
     */
    function getName() : ?string
    {
        return $this->name;
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
    /**
     * @param bool $automaticRenewal Value describing if the device is permitted to automatically renew its token
     */
    function setAutomaticRenewal(?bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Value describing if the device is permitted to automatically renew its token
     */
    function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @param bool $activable Value describing if the devices are activable and can recover a token
     */
    function setActivable(?bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool Value describing if the devices are activable and can recover a token
     */
    function getActivable() : ?bool
    {
        return $this->activable;
    }
}