<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\BulkDeviceAsynchronousRequest\DataItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest extends Model
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
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId The identifier of the device type under which the new devices will be created
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
     * @return string The identifier of the device type under which the new devices will be created
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
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
     * @param bool $prototype Value describing if the devices are prototypes
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
     * @return bool Value describing if the devices are prototypes
     */
    public function getPrototype() : ?bool
    {
        return $this->prototype;
    }
    /**
     * Setter for prefix
     *
     * @param string $prefix Prefix to used in device name
     *
     * @return static To use in method chains
     */
    public function setPrefix(?string $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Getter for prefix
     *
     * @return string Prefix to used in device name
     */
    public function getPrefix() : ?string
    {
        return $this->prefix;
    }
    /**
     * Setter for data
     *
     * @param DataItem[] $data
     *
     * @return static To use in method chains
     */
    public function setData(?array $data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return DataItem[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceTypeId' => new PrimitiveSerializer('string'), 'productCertificate' => new ClassSerializer(CertificateUpdate::class), 'prototype' => new PrimitiveSerializer('bool'), 'prefix' => new PrimitiveSerializer('string'), 'data' => new ArraySerializer(new ClassSerializer(DataItem::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('deviceTypeId' => array(new Required()), 'productCertificate' => array(new Child()), 'prefix' => array(new MaxLength(40)), 'data' => array(new ChildSet()));
        return $rules;
    }
}