<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\InternetSubscription;
/**
 * Information about LAN internet subscription
 */
class LanSubscription extends InternetSubscription
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
     * - `LanSubscription::NETWORK_TYPE_COMPANY`
     * - `LanSubscription::NETWORK_TYPE_OTHER`
     * - `LanSubscription::NETWORK_TYPE_RESIDENT`
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * - `LanSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `LanSubscription::ETH_CONNECTION_TYPE_STATIC`
     *
     * @var int
     */
    protected ?int $ethConnectionType = null;
    /**
     * The addressing of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $addressing = null;
    /**
     * Comments about the connection of this internet subscription. This field can be unset when updating.
     *
     * @var float
     */
    protected ?float $connectionComments = null;
    /**
     * @param int $networkType Subscription network type
     * - `LanSubscription::NETWORK_TYPE_COMPANY`
     * - `LanSubscription::NETWORK_TYPE_OTHER`
     * - `LanSubscription::NETWORK_TYPE_RESIDENT`
     */
    function setNetworkType(?int $networkType)
    {
        $this->networkType = $networkType;
    }
    /**
     * @return int Subscription network type
     * - `LanSubscription::NETWORK_TYPE_COMPANY`
     * - `LanSubscription::NETWORK_TYPE_OTHER`
     * - `LanSubscription::NETWORK_TYPE_RESIDENT`
     */
    function getNetworkType() : ?int
    {
        return $this->networkType;
    }
    /**
     * @param int $ethConnectionType Subscription connection type
     * - `LanSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `LanSubscription::ETH_CONNECTION_TYPE_STATIC`
     */
    function setEthConnectionType(?int $ethConnectionType)
    {
        $this->ethConnectionType = $ethConnectionType;
    }
    /**
     * @return int Subscription connection type
     * - `LanSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `LanSubscription::ETH_CONNECTION_TYPE_STATIC`
     */
    function getEthConnectionType() : ?int
    {
        return $this->ethConnectionType;
    }
    /**
     * @param string $addressing The addressing of this internet subscription. This field can be unset when updating.
     */
    function setAddressing(?string $addressing)
    {
        $this->addressing = $addressing;
    }
    /**
     * @return string The addressing of this internet subscription. This field can be unset when updating.
     */
    function getAddressing() : ?string
    {
        return $this->addressing;
    }
    /**
     * @param float $connectionComments Comments about the connection of this internet subscription. This field can be unset when updating.
     */
    function setConnectionComments(?float $connectionComments)
    {
        $this->connectionComments = $connectionComments;
    }
    /**
     * @return float Comments about the connection of this internet subscription. This field can be unset when updating.
     */
    function getConnectionComments() : ?float
    {
        return $this->connectionComments;
    }
}