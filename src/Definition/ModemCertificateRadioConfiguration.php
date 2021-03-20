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
     * @var int
     */
    protected int $outputPower;
    /**
     * Balanced link budget
     *
     * @var bool
     */
    protected bool $balancedLinkBudget;
    /**
     * @param int outputPower Output conducted power (dBm)
     */
    function setOutputPower(int $outputPower)
    {
        $this->outputPower = $outputPower;
    }
    /**
     * @return int Output conducted power (dBm)
     */
    function getOutputPower() : int
    {
        return $this->outputPower;
    }
    /**
     * @param bool balancedLinkBudget Balanced link budget
     */
    function setBalancedLinkBudget(bool $balancedLinkBudget)
    {
        $this->balancedLinkBudget = $balancedLinkBudget;
    }
    /**
     * @return bool Balanced link budget
     */
    function getBalancedLinkBudget() : bool
    {
        return $this->balancedLinkBudget;
    }
}