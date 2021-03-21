<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
use Arimac\Sigfox\Definition\BulkDeviceAsynchronousRequest\DataItemItem;
use Arimac\Sigfox\Definition;
/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest extends Definition
{
    protected $required = array('deviceTypeId');
    /**
     * The identifier of the device type under which the new devices will be created
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var CertificateUpdate */
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
    /** @var BulkDeviceAsynchronousRequest\DataItemItem */
    protected ?BulkDeviceAsynchronousRequest\DataItemItem $data = null;
    protected $objects = array('productCertificate' => '\\Arimac\\Sigfox\\Definition\\CertificateUpdate');
    /**
     * @param string $deviceTypeId The identifier of the device type under which the new devices will be created
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
     * @param bool $prototype Value describing if the devices are prototypes
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
     * @param string $prefix Prefix to used in device name
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
     * @param BulkDeviceAsynchronousRequest\DataItemItem data
     */
    function setData(?BulkDeviceAsynchronousRequest\DataItemItem $data)
    {
        $this->data = $data;
    }
    /**
     * @return BulkDeviceAsynchronousRequest\DataItemItem data
     */
    function getData() : ?BulkDeviceAsynchronousRequest\DataItemItem
    {
        return $this->data;
    }
}