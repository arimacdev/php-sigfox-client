<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest
{
    /**
     * The identifier of the device type under which the new devices will be created
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var CertificateUpdate */
    protected ?CertificateUpdate $productCertificate;
    /**
     * Value describing if the devices are prototypes
     *
     * @var bool
     */
    protected ?bool $prototype;
    /**
     * Prefix to used in device name
     *
     * @var string
     */
    protected ?string $prefix;
    /** @var array */
    protected ?array $data;
    /**
     * @param string deviceTypeId The identifier of the device type under which the new devices will be created
     */
    function setDeviceTypeId(string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @return string The identifier of the device type under which the new devices will be created
     */
    function getDeviceTypeId() : string
    {
        return $this->deviceTypeId;
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
     * @param bool prototype Value describing if the devices are prototypes
     */
    function setPrototype(?bool $prototype)
    {
        $this->prototype = $prototype;
    }
    /**
     * @return bool Value describing if the devices are prototypes
     */
    function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * @param string prefix Prefix to used in device name
     */
    function setPrefix(?string $prefix)
    {
        $this->prefix = $prefix;
    }
    /**
     * @return string Prefix to used in device name
     */
    function getPrefix() : ?string
    {
        return $this->prefix;
    }
    /**
     * @param array data
     */
    function setData(?array $data)
    {
        $this->data = $data;
    }
    /**
     * @return array data
     */
    function getData() : ?array
    {
        return $this->data;
    }
}