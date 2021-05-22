<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
trait SingleDeviceFields
{
    /**
     * true if the device is activable and can take a token. Not used if the device has already a token
     *
     * @var bool
     */
    protected ?bool $activable = null;
    /**
     * Allow token renewal ?
     *
     * @var bool
     */
    protected ?bool $automaticRenewal = null;
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
     * @var CertificateUpdate
     */
    protected ?CertificateUpdate $productCertificate = null;
    /**
     * If the device is a prototype or not
     *
     * @var bool
     */
    protected ?bool $prototype = null;
    /**
     * Setter for activable
     *
     * @param bool $activable true if the device is activable and can take a token. Not used if the device has
     *                        already a token
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
     * @return bool true if the device is activable and can take a token. Not used if the device has already a token
     */
    public function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Allow token renewal ?
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
     * @return bool Allow token renewal ?
     */
    public function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
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
     * Setter for productCertificate
     *
     * @param CertificateUpdate $productCertificate
     *
     * @return static To use in method chains
     */
    public function setProductCertificate(?CertificateUpdate $productCertificate)
    {
        $this->productCertificate = $productCertificate;
        return $this;
    }
    /**
     * Getter for productCertificate
     *
     * @return CertificateUpdate
     */
    public function getProductCertificate() : ?CertificateUpdate
    {
        return $this->productCertificate;
    }
    /**
     * Setter for prototype
     *
     * @param bool $prototype If the device is a prototype or not
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
     * @return bool If the device is a prototype or not
     */
    public function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaDataSingleDeviceFields() : array
    {
        $serializers = array('activable' => new PrimitiveSerializer('bool'), 'automaticRenewal' => new PrimitiveSerializer('bool'), 'lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'productCertificate' => new ClassSerializer(CertificateUpdate::class), 'prototype' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaDataSingleDeviceFields() : array
    {
        $rules = array('productCertificate' => array(new Child()));
        return $rules;
    }
}