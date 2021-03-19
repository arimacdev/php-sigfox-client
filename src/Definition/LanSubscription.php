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
    protected int $networkType;
    /**
     * Subscription connection type
     * - `LanSubscription::ETH_CONNECTION_TYPE_DHCP`
     * - `LanSubscription::ETH_CONNECTION_TYPE_STATIC`
     *
     * @var int
     */
    protected int $ethConnectionType;
    /**
     * The addressing of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $addressing;
    /**
     * Comments about the connection of this internet subscription. This field can be unset when updating.
     *
     * @var int
     */
    protected int $connectionComments;
}