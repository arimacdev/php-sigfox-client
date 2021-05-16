<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @return self To use in method chains
     */
    public function setRadioConfigurations(?array $radioConfigurations) : self
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
     * @return self To use in method chains
     */
    public function setRepeaterFunction(?bool $repeaterFunction) : self
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
        return array('radioConfigurations' => new ArraySerializer(self::class, 'radioConfigurations', new ClassSerializer(self::class, 'radioConfigurations', ModemCertificateRadioConfiguration::class)), 'repeaterFunction' => new PrimitiveSerializer(self::class, 'repeaterFunction', 'bool'));
    }
}