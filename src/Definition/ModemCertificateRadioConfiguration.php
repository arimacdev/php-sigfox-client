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
}