<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\BulkDeviceAsynchronousRequest\DataItem;
/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest extends Definition
{
    /**
     * The identifier of the device type under which the new devices will be created
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * @var CertificateUpdate
     */
    protected ?CertificateUpdate $productCertificate = null;
    /**
     * Value describing if the devices are prototypes
     *
     * @var bool
     */
    protected ?bool $prototype = null;
    /**
     * Prefix to used in device name
     *
     * @var string
     */
    protected ?string $prefix = null;
    /**
     * @var DataItem[]
     */
    protected ?array $data = null;
    protected $serialize = array('productCertificate' => CertificateUpdate::class);
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId The identifier of the device type under which the new devices will be created
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
     * @return string The identifier of the device type under which the new devices will be created
     */
    public function getDeviceTypeId() : string
    {
        return $this->deviceTypeId;
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
     * @param bool $prototype Value describing if the devices are prototypes
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
     * @return bool Value describing if the devices are prototypes
     */
    public function getPrototype() : bool
    {
        return $this->prototype;
    }
    /**
     * Setter for prefix
     *
     * @param string $prefix Prefix to used in device name
     *
     * @return self To use in method chains
     */
    public function setPrefix(?string $prefix) : self
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Getter for prefix
     *
     * @return string Prefix to used in device name
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }
    /**
     * Setter for data
     *
     * @param DataItem[] $data
     *
     * @return self To use in method chains
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
}