<?php

namespace Arimac\Sigfox\Model\BulkDeviceAsynchronousRequest;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Describes the individual fields of devices created in an ansynchronous bulk request
 */
class DataItem extends Model
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
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
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
     * Setter for name
     *
     * @param string $name The device's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
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
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Value describing if the device is permitted to automatically renew its token
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
        $serializers = array('id' => new PrimitiveSerializer('string'), 'pac' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'automaticRenewal' => new PrimitiveSerializer('bool'), 'activable' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('id' => array(new Required()));
        return $rules;
    }
}