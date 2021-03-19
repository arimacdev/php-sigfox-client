<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RadioConfiguration;
/**
 * Defines the properties of a product certificate radio configuration
 */
class ProductCertificateRadioConfiguration extends RadioConfiguration
{
    /** U0 */
    public const UPLINK_CLASS_U0 = 0;
    /** U1 */
    public const UPLINK_CLASS_U1 = 1;
    /** U2 */
    public const UPLINK_CLASS_U2 = 2;
    /** U3 */
    public const UPLINK_CLASS_U3 = 3;
    /** D0 */
    public const UPLINK_CLASS_D0 = 4;
    /** D1 */
    public const UPLINK_CLASS_D1 = 5;
    /** D2 */
    public const UPLINK_CLASS_D2 = 6;
    /** D3 */
    public const UPLINK_CLASS_D3 = 7;
    /**
     * The device uplink class
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_U0`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_U1`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_U2`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_U3`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_D0`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_D1`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_D2`
     * - `ProductCertificateRadioConfiguration::UPLINK_CLASS_D3`
     *
     * @var int
     */
    protected int $uplinkClass;
    /**
     * Maximum radiated power EIRP (dBm)
     *
     * @var int
     */
    protected int $maxEirp;
}