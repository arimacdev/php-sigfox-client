<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Information about LAN internet subscription
 */
class CreateLanSubscription extends CreateInternetSubscription
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
     * - {@see CreateLanSubscription::NETWORK_TYPE_COMPANY}
     * - {@see CreateLanSubscription::NETWORK_TYPE_OTHER}
     * - {@see CreateLanSubscription::NETWORK_TYPE_RESIDENT}
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * 
     * - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_DHCP}
     * - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     * @var double
     */
    protected ?float $connectionComments = null;
    /**
     * Setter for networkType
     *
     * @param int $networkType Subscription network type
     *                         
     *                         - {@see CreateLanSubscription::NETWORK_TYPE_COMPANY}
     *                         - {@see CreateLanSubscription::NETWORK_TYPE_OTHER}
     *                         - {@see CreateLanSubscription::NETWORK_TYPE_RESIDENT}
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
     *             - {@see CreateLanSubscription::NETWORK_TYPE_COMPANY}
     *             - {@see CreateLanSubscription::NETWORK_TYPE_OTHER}
     *             - {@see CreateLanSubscription::NETWORK_TYPE_RESIDENT}
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
     *                               - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_DHCP}
     *                               - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     *             - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_DHCP}
     *             - {@see CreateLanSubscription::ETH_CONNECTION_TYPE_STATIC}
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
     * @return static To use in method chains
     */
    public function setAddressing(?string $addressing)
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
     * @param double $connectionComments Comments about the connection of this internet subscription. This field can
     *                                   be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setConnectionComments(?float $connectionComments)
    {
        $this->connectionComments = $connectionComments;
        return $this;
    }
    /**
     * Getter for connectionComments
     *
     * @return double Comments about the connection of this internet subscription. This field can be unset when
     *                updating.
     */
    public function getConnectionComments() : ?float
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
        $serializers = array('networkType' => new PrimitiveSerializer('int'), 'ethConnectionType' => new PrimitiveSerializer('int'), 'addressing' => new PrimitiveSerializer('string'), 'connectionComments' => new PrimitiveSerializer('double'));
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