<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\InternetSubscription;
/**
 * Information about Wi-Fi internet subscription
 */
class WifiSubscription extends InternetSubscription
{
    /** COMPANY */
    public const NETWORK_TYPE_COMPANY = 0;
    /** OTHER */
    public const NETWORK_TYPE_OTHER = 1;
    /** RESIDENT */
    public const NETWORK_TYPE_RESIDENT = 2;
    /** DHCP */
    public const ETH_CONNECTION_TYPE_DHCP = 0;
    /** STATIC */
    public const ETH_CONNECTION_TYPE_STATIC = 1;
    /**
     * Subscription network type
     * - `WifiSubscription::NETWORK_TYPE_COMPANY`
     * - `WifiSubscription::NETWORK_TYPE_OTHER`
     * - `WifiSubscription::NETWORK_TYPE_RESIDENT`
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * - `WifiSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `WifiSubscription::ETH_CONNECTION_TYPE_STATIC`
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
     * @param int $networkType Subscription network type
     * - `WifiSubscription::NETWORK_TYPE_COMPANY`
     * - `WifiSubscription::NETWORK_TYPE_OTHER`
     * - `WifiSubscription::NETWORK_TYPE_RESIDENT`
     */
    function setNetworkType(?int $networkType)
    {
        $this->networkType = $networkType;
    }
    /**
     * @return int Subscription network type
     * - `WifiSubscription::NETWORK_TYPE_COMPANY`
     * - `WifiSubscription::NETWORK_TYPE_OTHER`
     * - `WifiSubscription::NETWORK_TYPE_RESIDENT`
     */
    function getNetworkType() : ?int
    {
        return $this->networkType;
    }
    /**
     * @param int $ethConnectionType Subscription connection type
     * - `WifiSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `WifiSubscription::ETH_CONNECTION_TYPE_STATIC`
     */
    function setEthConnectionType(?int $ethConnectionType)
    {
        $this->ethConnectionType = $ethConnectionType;
    }
    /**
     * @return int Subscription connection type
     * - `WifiSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `WifiSubscription::ETH_CONNECTION_TYPE_STATIC`
     */
    function getEthConnectionType() : ?int
    {
        return $this->ethConnectionType;
    }
    /**
     * @param string $ssid The SSID of this Wi-Fi internet subscription. This field can be unset when updating.
     */
    function setSsid(?string $ssid)
    {
        $this->ssid = $ssid;
    }
    /**
     * @return string The SSID of this Wi-Fi internet subscription. This field can be unset when updating.
     */
    function getSsid() : ?string
    {
        return $this->ssid;
    }
    /**
     * @param string $passphrase The passphrase on this Wi-Fi internet subscription. This field can be unset when updating.
     */
    function setPassphrase(?string $passphrase)
    {
        $this->passphrase = $passphrase;
    }
    /**
     * @return string The passphrase on this Wi-Fi internet subscription. This field can be unset when updating.
     */
    function getPassphrase() : ?string
    {
        return $this->passphrase;
    }
}