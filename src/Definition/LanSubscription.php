<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Information about LAN internet subscription
 */
class LanSubscription extends InternetSubscription
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
     * @var self::NETWORK_TYPE_*
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     *
     * @var self::ETH_CONNECTION_TYPE_*
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
     * @var int
     */
    protected ?int $connectionComments = null;
    /**
     * Setter for networkType
     *
     * @param self::NETWORK_TYPE_* $networkType Subscription network type
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
     * @return self::NETWORK_TYPE_* Subscription network type
     */
    public function getNetworkType() : int
    {
        return $this->networkType;
    }
    /**
     * Setter for ethConnectionType
     *
     * @param self::ETH_CONNECTION_TYPE_* $ethConnectionType Subscription connection type
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
     * @return self::ETH_CONNECTION_TYPE_* Subscription connection type
     */
    public function getEthConnectionType() : int
    {
        return $this->ethConnectionType;
    }
    /**
     * Setter for addressing
     *
     * @param string $addressing The addressing of this internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setAddressing(?string $addressing) : self
    {
        $this->addressing = $addressing;
        return $this;
    }
    /**
     * Getter for addressing
     *
     * @return string The addressing of this internet subscription. This field can be unset when updating.
     */
    public function getAddressing() : string
    {
        return $this->addressing;
    }
    /**
     * Setter for connectionComments
     *
     * @param int $connectionComments Comments about the connection of this internet subscription. This field can be
     *                                unset when updating.
     *
     * @return self To use in method chains
     */
    public function setConnectionComments(?int $connectionComments) : self
    {
        $this->connectionComments = $connectionComments;
        return $this;
    }
    /**
     * Getter for connectionComments
     *
     * @return int Comments about the connection of this internet subscription. This field can be unset when
     *             updating.
     */
    public function getConnectionComments() : int
    {
        return $this->connectionComments;
    }
}