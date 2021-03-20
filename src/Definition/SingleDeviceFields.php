<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
class SingleDeviceFields
{
    /**
     * true if the device is activable and can take a token. Not used if the device has already a token
     *
     * @var bool
     */
    protected bool $activable;
    /**
     * Allow token renewal ?
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * The device's provided latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * The device's provided longitude
     *
     * @var int
     */
    protected int $lng;
    /** @var CertificateUpdate */
    protected CertificateUpdate $productCertificate;
    /**
     * If the device is a prototype or not
     *
     * @var bool
     */
    protected bool $prototype;
    /**
     * @param bool activable true if the device is activable and can take a token. Not used if the device has already a token
     */
    function setActivable(bool $activable)
    {
        $this->activable = $activable;
    }
    /**
     * @return bool true if the device is activable and can take a token. Not used if the device has already a token
     */
    function getActivable() : bool
    {
        return $this->activable;
    }
    /**
     * @param bool automaticRenewal Allow token renewal ?
     */
    function setAutomaticRenewal(bool $automaticRenewal)
    {
        $this->automaticRenewal = $automaticRenewal;
    }
    /**
     * @return bool Allow token renewal ?
     */
    function getAutomaticRenewal() : bool
    {
        return $this->automaticRenewal;
    }
    /**
     * @param int lat The device's provided latitude
     */
    function setLat(int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int The device's provided latitude
     */
    function getLat() : int
    {
        return $this->lat;
    }
    /**
     * @param int lng The device's provided longitude
     */
    function setLng(int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int The device's provided longitude
     */
    function getLng() : int
    {
        return $this->lng;
    }
    /**
     * @param CertificateUpdate productCertificate
     */
    function setProductCertificate(CertificateUpdate $productCertificate)
    {
        $this->productCertificate = $productCertificate;
    }
    /**
     * @return CertificateUpdate productCertificate
     */
    function getProductCertificate() : CertificateUpdate
    {
        return $this->productCertificate;
    }
    /**
     * @param bool prototype If the device is a prototype or not
     */
    function setPrototype(bool $prototype)
    {
        $this->prototype = $prototype;
    }
    /**
     * @return bool If the device is a prototype or not
     */
    function getPrototype() : bool
    {
        return $this->prototype;
    }
}