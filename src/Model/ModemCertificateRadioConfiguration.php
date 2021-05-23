<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the properties of a product certificate radio configuration
 */
class ModemCertificateRadioConfiguration extends RadioConfiguration
{
    /**
     * Output conducted power (dBm)
     *
     * @var double
     */
    protected ?float $outputPower = null;
    /**
     * Balanced link budget
     *
     * @var bool
     */
    protected ?bool $balancedLinkBudget = null;
    /**
     * Setter for outputPower
     *
     * @param double $outputPower Output conducted power (dBm)
     *
     * @return static To use in method chains
     */
    public function setOutputPower(?float $outputPower)
    {
        $this->outputPower = $outputPower;
        return $this;
    }
    /**
     * Getter for outputPower
     *
     * @return double Output conducted power (dBm)
     */
    public function getOutputPower() : ?float
    {
        return $this->outputPower;
    }
    /**
     * Setter for balancedLinkBudget
     *
     * @param bool $balancedLinkBudget Balanced link budget
     *
     * @return static To use in method chains
     */
    public function setBalancedLinkBudget(?bool $balancedLinkBudget)
    {
        $this->balancedLinkBudget = $balancedLinkBudget;
        return $this;
    }
    /**
     * Getter for balancedLinkBudget
     *
     * @return bool Balanced link budget
     */
    public function getBalancedLinkBudget() : ?bool
    {
        return $this->balancedLinkBudget;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('outputPower' => new PrimitiveSerializer('double'), 'balancedLinkBudget' => new PrimitiveSerializer('bool'));
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
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}