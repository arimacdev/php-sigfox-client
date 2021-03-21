<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RadioConfiguration;
/**
 * Defines the properties of a product certificate radio configuration
 */
class ModemCertificateRadioConfiguration extends RadioConfiguration
{
    /**
     * Output conducted power (dBm)
     *
     * @var float
     */
    protected ?float $outputPower = null;
    /**
     * Balanced link budget
     *
     * @var bool
     */
    protected ?bool $balancedLinkBudget = null;
    /**
     * @param float $outputPower Output conducted power (dBm)
     */
    function setOutputPower(?float $outputPower)
    {
        $this->outputPower = $outputPower;
    }
    /**
     * @return float Output conducted power (dBm)
     */
    function getOutputPower() : ?float
    {
        return $this->outputPower;
    }
    /**
     * @param bool $balancedLinkBudget Balanced link budget
     */
    function setBalancedLinkBudget(?bool $balancedLinkBudget)
    {
        $this->balancedLinkBudget = $balancedLinkBudget;
    }
    /**
     * @return bool Balanced link budget
     */
    function getBalancedLinkBudget() : ?bool
    {
        return $this->balancedLinkBudget;
    }
}