<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Information about Wi-Fi internet subscription
 */
class WifiSubscription extends InternetSubscription
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
     * - {@see WifiSubscription::NETWORK_TYPE_COMPANY}
     * - {@see WifiSubscription::NETWORK_TYPE_OTHER}
     * - {@see WifiSubscription::NETWORK_TYPE_RESIDENT}
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * 
     * - {@see WifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     * - {@see WifiSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     *                         - {@see WifiSubscription::NETWORK_TYPE_COMPANY}
     *                         - {@see WifiSubscription::NETWORK_TYPE_OTHER}
     *                         - {@see WifiSubscription::NETWORK_TYPE_RESIDENT}
     *                         
     *
     * @return static To use in method chains
     */
    public function setNetworkType(?int $networkType)
    {
        $this->networkType = $networkType;
        return $this;
    }
    /**
     * Getter for networkType
     *
     * @return int Subscription network type
     *             
     *             - {@see WifiSubscription::NETWORK_TYPE_COMPANY}
     *             - {@see WifiSubscription::NETWORK_TYPE_OTHER}
     *             - {@see WifiSubscription::NETWORK_TYPE_RESIDENT}
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
     *                               - {@see WifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     *                               - {@see WifiSubscription::ETH_CONNECTION_TYPE_STATIC}
     *                               
     *
     * @return static To use in method chains
     */
    public function setEthConnectionType(?int $ethConnectionType)
    {
        $this->ethConnectionType = $ethConnectionType;
        return $this;
    }
    /**
     * Getter for ethConnectionType
     *
     * @return int Subscription connection type
     *             
     *             - {@see WifiSubscription::ETH_CONNECTION_TYPE_DHCP}
     *             - {@see WifiSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     * @return static To use in method chains
     */
    public function setSsid(?string $ssid)
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
     * @return static To use in method chains
     */
    public function setPassphrase(?string $passphrase)
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
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}