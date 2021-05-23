<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
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
     * @var double
     */
    protected ?float $lat = null;
    /**
     * The device's provided longitude
     *
     * @var double
     */
    protected ?float $lng = null;
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId The device type's identifier this device is affected
     *
     * @return static To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId)
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
     * @return static To use in method chains
     */
    public function setPac(?string $pac)
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
     * @return static To use in method chains
     */
    public function setPrototype(?bool $prototype)
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
     * @return static To use in method chains
     */
    public function setAutomaticRenewal(?bool $automaticRenewal)
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
     * @return static To use in method chains
     */
    public function setActivable(?bool $activable)
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
     * @param double $lat The device's provided latitude
     *
     * @return static To use in method chains
     */
    public function setLat(?float $lat)
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return double The device's provided latitude
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng The device's provided longitude
     *
     * @return static To use in method chains
     */
    public function setLng(?float $lng)
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return double The device's provided longitude
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceTypeId' => new PrimitiveSerializer('string'), 'pac' => new PrimitiveSerializer('string'), 'prototype' => new PrimitiveSerializer('bool'), 'automaticRenewal' => new PrimitiveSerializer('bool'), 'activable' => new PrimitiveSerializer('bool'), 'lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        $serializers = array_merge($serializers, $this->getSerializeMetaDataSingleDeviceFields());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('deviceTypeId' => array(new Required()), 'pac' => array(new Required()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        $rules = array_merge($rules, $this->getValidationMetaDataSingleDeviceFields());
        return $rules;
    }
}