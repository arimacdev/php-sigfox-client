<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the properties of a product certificate radio configuration
 */
class ProductCertificateRadioConfiguration extends RadioConfiguration
{
    /**
     * U0
     */
    public const UPLINK_CLASS_U0 = 0;
    /**
     * U1
     */
    public const UPLINK_CLASS_U1 = 1;
    /**
     * U2
     */
    public const UPLINK_CLASS_U2 = 2;
    /**
     * U3
     */
    public const UPLINK_CLASS_U3 = 3;
    /**
     * D0
     */
    public const UPLINK_CLASS_D0 = 4;
    /**
     * D1
     */
    public const UPLINK_CLASS_D1 = 5;
    /**
     * D2
     */
    public const UPLINK_CLASS_D2 = 6;
    /**
     * D3
     */
    public const UPLINK_CLASS_D3 = 7;
    /**
     * The device uplink class
     *
     * @var self::UPLINK_CLASS_*
     */
    protected ?int $uplinkClass = null;
    /**
     * Maximum radiated power EIRP (dBm)
     *
     * @var int
     */
    protected ?int $maxEirp = null;
    /**
     * Setter for uplinkClass
     *
     * @param self::UPLINK_CLASS_* $uplinkClass The device uplink class
     *
     * @return self To use in method chains
     */
    public function setUplinkClass(?int $uplinkClass) : self
    {
        $this->uplinkClass = $uplinkClass;
        return $this;
    }
    /**
     * Getter for uplinkClass
     *
     * @return self::UPLINK_CLASS_* The device uplink class
     */
    public function getUplinkClass() : int
    {
        return $this->uplinkClass;
    }
    /**
     * Setter for maxEirp
     *
     * @param int $maxEirp Maximum radiated power EIRP (dBm)
     *
     * @return self To use in method chains
     */
    public function setMaxEirp(?int $maxEirp) : self
    {
        $this->maxEirp = $maxEirp;
        return $this;
    }
    /**
     * Getter for maxEirp
     *
     * @return int Maximum radiated power EIRP (dBm)
     */
    public function getMaxEirp() : int
    {
        return $this->maxEirp;
    }
}