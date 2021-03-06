<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U0}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U1}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U2}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U3}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D0}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D1}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D2}
     * - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D3}
     *
     * @var int
     */
    protected ?int $uplinkClass = null;
    /**
     * Maximum radiated power EIRP (dBm)
     *
     * @var double
     */
    protected ?float $maxEirp = null;
    /**
     * Setter for uplinkClass
     *
     * @param int $uplinkClass The device uplink class
     *                         
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U0}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U1}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U2}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U3}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D0}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D1}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D2}
     *                         - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D3}
     *                         
     *
     * @return static To use in method chains
     */
    public function setUplinkClass(?int $uplinkClass)
    {
        $this->uplinkClass = $uplinkClass;
        return $this;
    }
    /**
     * Getter for uplinkClass
     *
     * @return int The device uplink class
     *             
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U0}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U1}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U2}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_U3}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D0}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D1}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D2}
     *             - {@see ProductCertificateRadioConfiguration::UPLINK_CLASS_D3}
     *             
     */
    public function getUplinkClass() : ?int
    {
        return $this->uplinkClass;
    }
    /**
     * Setter for maxEirp
     *
     * @param double $maxEirp Maximum radiated power EIRP (dBm)
     *
     * @return static To use in method chains
     */
    public function setMaxEirp(?float $maxEirp)
    {
        $this->maxEirp = $maxEirp;
        return $this;
    }
    /**
     * Getter for maxEirp
     *
     * @return double Maximum radiated power EIRP (dBm)
     */
    public function getMaxEirp() : ?float
    {
        return $this->maxEirp;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('uplinkClass' => new PrimitiveSerializer('int'), 'maxEirp' => new PrimitiveSerializer('double'));
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