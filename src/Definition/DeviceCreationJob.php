<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DeviceCreationJob extends CommonDevice
{
    use SingleDeviceFields;
    /**
     * The device type's identifier this device is affected
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * The device's PAC (Porting Access Code)
     *
     * @var string
     */
    protected ?string $pac = null;
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
     * @var int
     */
    protected ?int $lat = null;
    /**
     * The device's provided longitude
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId The device type's identifier this device is affected
     *
     * @return self To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId) : self
    {
        $this->deviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Getter for deviceTypeId
     *
     * @return string The device type's identifier this device is affected
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
    }
    /**
     * Setter for pac
     *
     * @param string $pac The device's PAC (Porting Access Code)
     *
     * @return self To use in method chains
     */
    public function setPac(?string $pac) : self
    {
        $this->pac = $pac;
        return $this;
    }
    /**
     * Getter for pac
     *
     * @return string The device's PAC (Porting Access Code)
     */
    public function getPac() : ?string
    {
        return $this->pac;
    }
    /**
     * Setter for prototype
     *
     * @param bool $prototype Set to true if the device is a prototype
     *
     * @return self To use in method chains
     */
    public function setPrototype(?bool $prototype) : self
    {
        $this->prototype = $prototype;
        return $this;
    }
    /**
     * Getter for prototype
     *
     * @return bool Set to true if the device is a prototype
     */
    public function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Subscribtion to automatic token renewal
     *
     * @return self To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal) : self
    {
        $this->automaticRenewal = $automaticRenewal;
        return $this;
    }
    /**
     * Getter for automaticRenewal
     *
     * @return bool Subscribtion to automatic token renewal
     */
    public function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * Setter for activable
     *
     * @param bool $activable The device is activable and can take a token
     *
     * @return self To use in method chains
     */
    public function setActivable(?bool $activable) : self
    {
        $this->activable = $activable;
        return $this;
    }
    /**
     * Getter for activable
     *
     * @return bool The device is activable and can take a token
     */
    public function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * Setter for lat
     *
     * @param int $lat The device's provided latitude
     *
     * @return self To use in method chains
     */
    public function setLat(?int $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return int The device's provided latitude
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng The device's provided longitude
     *
     * @return self To use in method chains
     */
    public function setLng(?int $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return int The device's provided longitude
     */
    public function getLng() : ?int
    {
        return $this->lng;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('deviceTypeId' => new PrimitiveSerializer(self::class, 'deviceTypeId', 'string'), 'pac' => new PrimitiveSerializer(self::class, 'pac', 'string'), 'prototype' => new PrimitiveSerializer(self::class, 'prototype', 'bool'), 'automaticRenewal' => new PrimitiveSerializer(self::class, 'automaticRenewal', 'bool'), 'activable' => new PrimitiveSerializer(self::class, 'activable', 'bool'), 'lat' => new PrimitiveSerializer(self::class, 'lat', 'int'), 'lng' => new PrimitiveSerializer(self::class, 'lng', 'int'));
    }
}