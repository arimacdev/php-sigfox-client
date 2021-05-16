<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * - {@see LanSubscription::NETWORK_TYPE_COMPANY}
     * - {@see LanSubscription::NETWORK_TYPE_OTHER}
     * - {@see LanSubscription::NETWORK_TYPE_RESIDENT}
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * 
     * - {@see LanSubscription::ETH_CONNECTION_TYPE_DHCP}
     * - {@see LanSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     * @var int
     */
    protected ?int $connectionComments = null;
    /**
     * Setter for networkType
     *
     * @param int $networkType Subscription network type
     *                         
     *                         - {@see LanSubscription::NETWORK_TYPE_COMPANY}
     *                         - {@see LanSubscription::NETWORK_TYPE_OTHER}
     *                         - {@see LanSubscription::NETWORK_TYPE_RESIDENT}
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
     *             - {@see LanSubscription::NETWORK_TYPE_COMPANY}
     *             - {@see LanSubscription::NETWORK_TYPE_OTHER}
     *             - {@see LanSubscription::NETWORK_TYPE_RESIDENT}
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
     *                               - {@see LanSubscription::ETH_CONNECTION_TYPE_DHCP}
     *                               - {@see LanSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     *             - {@see LanSubscription::ETH_CONNECTION_TYPE_DHCP}
     *             - {@see LanSubscription::ETH_CONNECTION_TYPE_STATIC}
     *             
     */
    public function getEthConnectionType() : ?int
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
    public function getAddressing() : ?string
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
    public function getConnectionComments() : ?int
    {
        return $this->connectionComments;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('networkType' => new PrimitiveSerializer(self::class, 'networkType', 'int'), 'ethConnectionType' => new PrimitiveSerializer(self::class, 'ethConnectionType', 'int'), 'addressing' => new PrimitiveSerializer(self::class, 'addressing', 'string'), 'connectionComments' => new PrimitiveSerializer(self::class, 'connectionComments', 'int'));
    }
}