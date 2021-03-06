<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class ProductCertificate extends RadioCertificate
{
    /**
     * Radio configurations available for this certificate
     *
     * @var ProductCertificateRadioConfiguration[]
     */
    protected ?array $radioConfigurations = null;
    /**
     * The product certificate has repeater function or not
     *
     * @var bool
     */
    protected ?bool $devKit = null;
    /**
     * Setter for radioConfigurations
     *
     * @param ProductCertificateRadioConfiguration[] $radioConfigurations Radio configurations available for this
     *                                                                    certificate
     *                                                                    
     *
     * @return static To use in method chains
     */
    public function setRadioConfigurations(?array $radioConfigurations)
    {
        $this->radioConfigurations = $radioConfigurations;
        return $this;
    }
    /**
     * Getter for radioConfigurations
     *
     * @return ProductCertificateRadioConfiguration[] Radio configurations available for this certificate
     *                                                
     */
    public function getRadioConfigurations() : ?array
    {
        return $this->radioConfigurations;
    }
    /**
     * Setter for devKit
     *
     * @param bool $devKit The product certificate has repeater function or not
     *
     * @return static To use in method chains
     */
    public function setDevKit(?bool $devKit)
    {
        $this->devKit = $devKit;
        return $this;
    }
    /**
     * Getter for devKit
     *
     * @return bool The product certificate has repeater function or not
     */
    public function getDevKit() : ?bool
    {
        return $this->devKit;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('radioConfigurations' => new ArraySerializer(new ClassSerializer(ProductCertificateRadioConfiguration::class)), 'devKit' => new PrimitiveSerializer('bool'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('radioConfigurations' => array(new ChildSet()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}