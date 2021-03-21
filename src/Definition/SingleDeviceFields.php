<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
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
     * @var float
     */
    protected ?float $lat = null;
    /**
     * The device's provided longitude
     *
     * @var float
     */
    protected ?float $lng = null;
    /** @var CertificateUpdate */
    protected ?CertificateUpdate $productCertificate = null;
    /**
     * If the device is a prototype or not
     *
     * @var bool
     */
    protected ?bool $prototype = null;
    protected $objects = array('productCertificate' => '\\Arimac\\Sigfox\\Definition\\CertificateUpdate');
    /**
     * @param bool $activable true if the device is activable and can take a token. Not used if the device has already a token
     */
    function setActivable(?bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool true if the device is activable and can take a token. Not used if the device has already a token
     */
    function getActivable() : ?bool
    {
        return $this->activable;
    }
    /**
     * @param bool $automaticRenewal Allow token renewal ?
     */
    function setAutomaticRenewal(?bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Allow token renewal ?
     */
    function getAutomaticRenewal() : ?bool
    {
        return $this->automaticRenewal;
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
     * @param CertificateUpdate productCertificate
     */
    function setProductCertificate(?CertificateUpdate $productCertificate)
    {
        $this->productCertificate = $productCertificate;
    }
    /**
     * @return CertificateUpdate productCertificate
     */
    function getProductCertificate() : ?CertificateUpdate
    {
        return $this->productCertificate;
    }
    /**
     * @param bool $prototype If the device is a prototype or not
     */
    function setPrototype(?bool $prototype)
    {
        $this->prototype = $prototype;
    }
    /**
     * @return bool If the device is a prototype or not
     */
    function getPrototype() : ?bool
    {
        return $this->prototype;
    }
}