<?php

namespace Arimac\Sigfox\Definition\BulkDeviceAsynchronousRequest;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Describes the individual fields of devices created in an ansynchronous bulk request
 */
class DataItem extends Definition
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
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
     * @internal
     */
    protected array $validations = array('id' => array('required'));
    /**
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
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
     * Setter for name
     *
     * @param string $name The device's name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The device's name
     */
    public function getName() : ?string
    {
        return $this->name;
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
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Value describing if the device is permitted to automatically renew its token
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
     * @return bool Value describing if the device is permitted to automatically renew its token
     */
    public function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
    }
    /**
     * Setter for activable
     *
     * @param bool $activable Value describing if the devices are activable and can recover a token
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
     * @return bool Value describing if the devices are activable and can recover a token
     */
    public function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer('string'), 'pac' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'lat' => new PrimitiveSerializer('int'), 'lng' => new PrimitiveSerializer('int'), 'automaticRenewal' => new PrimitiveSerializer('bool'), 'activable' => new PrimitiveSerializer('bool'));
    }
}