<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class ModemCertificate extends RadioCertificate
{
    /**
     * Radio configurations available for this certificate
     *
     * @var ModemCertificateRadioConfiguration[]
     */
    protected ?array $radioConfigurations = null;
    /**
     * The modem certificate has repeater function or not
     *
     * @var bool
     */
    protected ?bool $repeaterFunction = null;
    /**
     * Setter for radioConfigurations
     *
     * @param ModemCertificateRadioConfiguration[] $radioConfigurations Radio configurations available for this
     *                                                                  certificate
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
     * @return ModemCertificateRadioConfiguration[] Radio configurations available for this certificate
     *                                              
     */
    public function getRadioConfigurations() : ?array
    {
        return $this->radioConfigurations;
    }
    /**
     * Setter for repeaterFunction
     *
     * @param bool $repeaterFunction The modem certificate has repeater function or not
     *
     * @return static To use in method chains
     */
    public function setRepeaterFunction(?bool $repeaterFunction)
    {
        $this->repeaterFunction = $repeaterFunction;
        return $this;
    }
    /**
     * Getter for repeaterFunction
     *
     * @return bool The modem certificate has repeater function or not
     */
    public function getRepeaterFunction() : ?bool
    {
        return $this->repeaterFunction;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('radioConfigurations' => new ArraySerializer(new ClassSerializer(ModemCertificateRadioConfiguration::class)), 'repeaterFunction' => new PrimitiveSerializer('bool'));
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