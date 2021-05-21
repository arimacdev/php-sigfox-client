<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Information about Wi-Fi internet subscription
 */
class UpdateWifiSubscription extends UpdateInternetSubscription
{
    /**
     * COMPANY
     */
    public const NETWORK_TYPE_COMPANY = 0;
    /**
     * OTHER
     */
    public const NETWORK_TYPE_OTHER = 1;
    /**
     * RESIDENT
     */
    public const NETWORK_TYPE_RESIDENT = 2;
    /**
     * DHCP
     */
    public const ETH_CONNECTION_TYPE_DHCP = 0;
    /**
     * STATIC
     */
    public const ETH_CONNECTION_TYPE_STATIC = 1;
    /**
     * Subscription network type
     * 
     * - {@see UpdateWifiSubscription::NETWORK_TYPE_COMPANY}
     * - {@see UpdateWifiSubscription::NETWORK_TYPE_OTHER}
     * - {@see UpdateWifiSubscription::NETWORK_TYPE_RESIDENT}
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * 
     * - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     * - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_STATIC}
     *
     * @var int
     */
    protected ?int $ethConnectionType = null;
    /**
     * The SSID of this Wi-Fi internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $ssid = null;
    /**
     * The passphrase on this Wi-Fi internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $passphrase = null;
    /**
     * Setter for networkType
     *
     * @param int $networkType Subscription network type
     *                         
     *                         - {@see UpdateWifiSubscription::NETWORK_TYPE_COMPANY}
     *                         - {@see UpdateWifiSubscription::NETWORK_TYPE_OTHER}
     *                         - {@see UpdateWifiSubscription::NETWORK_TYPE_RESIDENT}
     *                         
     *
     * @return self To use in method chains
     */
    public function setNetworkType(?int $networkType) : self
    {
        $this->networkType = $networkType;
        return $this;
    }
    /**
     * Getter for networkType
     *
     * @return int Subscription network type
     *             
     *             - {@see UpdateWifiSubscription::NETWORK_TYPE_COMPANY}
     *             - {@see UpdateWifiSubscription::NETWORK_TYPE_OTHER}
     *             - {@see UpdateWifiSubscription::NETWORK_TYPE_RESIDENT}
     *             
     */
    public function getNetworkType() : ?int
    {
        return $this->networkType;
    }
    /**
     * Setter for ethConnectionType
     *
     * @param int $ethConnectionType Subscription connection type
     *                               
     *                               - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     *                               - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_STATIC}
     *                               
     *
     * @return self To use in method chains
     */
    public function setEthConnectionType(?int $ethConnectionType) : self
    {
        $this->ethConnectionType = $ethConnectionType;
        return $this;
    }
    /**
     * Getter for ethConnectionType
     *
     * @return int Subscription connection type
     *             
     *             - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     *             - {@see UpdateWifiSubscription::ETH_CONNECTION_TYPE_STATIC}
     *             
     */
    public function getEthConnectionType() : ?int
    {
        return $this->ethConnectionType;
    }
    /**
     * Setter for ssid
     *
     * @param string $ssid The SSID of this Wi-Fi internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setSsid(?string $ssid) : self
    {
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * Getter for ssid
     *
     * @return string The SSID of this Wi-Fi internet subscription. This field can be unset when updating.
     */
    public function getSsid() : ?string
    {
        return $this->ssid;
    }
    /**
     * Setter for passphrase
     *
     * @param string $passphrase The passphrase on this Wi-Fi internet subscription. This field can be unset when
     *                           updating.
     *
     * @return self To use in method chains
     */
    public function setPassphrase(?string $passphrase) : self
    {
        $this->passphrase = $passphrase;
        return $this;
    }
    /**
     * Getter for passphrase
     *
     * @return string The passphrase on this Wi-Fi internet subscription. This field can be unset when updating.
     */
    public function getPassphrase() : ?string
    {
        return $this->passphrase;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('networkType' => new PrimitiveSerializer('int'), 'ethConnectionType' => new PrimitiveSerializer('int'), 'ssid' => new PrimitiveSerializer('string'), 'passphrase' => new PrimitiveSerializer('string'));
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
        $rules = array('networkType' => array(new Required()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}