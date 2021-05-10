<?php

namespace Arimac\Sigfox\Definition;

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
     * @var CertificateUpdate
     */
    protected ?CertificateUpdate $productCertificate = null;
    /**
     * If the device is a prototype or not
     *
     * @var bool
     */
    protected ?bool $prototype = null;
    protected $serialize = array('productCertificate' => CertificateUpdate::class);
    /**
     * Setter for activable
     *
     * @param bool $activable true if the device is activable and can take a token. Not used if the device has
     *                        already a token
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
     * @return bool true if the device is activable and can take a token. Not used if the device has already a token
     */
    public function getActivable() : bool
    {
        return $this->activable;
    }
    /**
     * Setter for automaticRenewal
     *
     * @param bool $automaticRenewal Allow token renewal ?
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
     * @return bool Allow token renewal ?
     */
    public function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
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
    public function getLat() : int
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
    public function getLng() : int
    {
        return $this->lng;
    }
    /**
     * Setter for productCertificate
     *
     * @param CertificateUpdate $productCertificate
     *
     * @return self To use in method chains
     */
    public function setProductCertificate(?CertificateUpdate $productCertificate) : self
    {
        $this->productCertificate = $productCertificate;
        return $this;
    }
    /**
     * Getter for productCertificate
     *
     * @return CertificateUpdate
     */
    public function getProductCertificate() : CertificateUpdate
    {
        return $this->productCertificate;
    }
    /**
     * Setter for prototype
     *
     * @param bool $prototype If the device is a prototype or not
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
     * @return bool If the device is a prototype or not
     */
    public function getPrototype() : bool
    {
        return $this->prototype;
    }
}