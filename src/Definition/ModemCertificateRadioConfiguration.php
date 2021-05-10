<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the properties of a product certificate radio configuration
 */
class ModemCertificateRadioConfiguration extends RadioConfiguration
{
    /**
     * Output conducted power (dBm)
     *
     * @var int
     */
    protected ?int $outputPower = null;
    /**
     * Balanced link budget
     *
     * @var bool
     */
    protected ?bool $balancedLinkBudget = null;
    /**
     * Setter for outputPower
     *
     * @param int $outputPower Output conducted power (dBm)
     *
     * @return self To use in method chains
     */
    public function setOutputPower(?int $outputPower) : self
    {
        $this->outputPower = $outputPower;
        return $this;
    }
    /**
     * Getter for outputPower
     *
     * @return int Output conducted power (dBm)
     */
    public function getOutputPower() : int
    {
        return $this->outputPower;
    }
    /**
     * Setter for balancedLinkBudget
     *
     * @param bool $balancedLinkBudget Balanced link budget
     *
     * @return self To use in method chains
     */
    public function setBalancedLinkBudget(?bool $balancedLinkBudget) : self
    {
        $this->balancedLinkBudget = $balancedLinkBudget;
        return $this;
    }
    /**
     * Getter for balancedLinkBudget
     *
     * @return bool Balanced link budget
     */
    public function getBalancedLinkBudget() : bool
    {
        return $this->balancedLinkBudget;
    }
}