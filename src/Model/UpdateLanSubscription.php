<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Information about LAN internet subscription
 */
class UpdateLanSubscription extends UpdateInternetSubscription
{
    /**
     * Subscription network type
     * - 0 -> COMPANY
     * - 1 -> OTHER
     * - 2 -> RESIDENT
     *
     * @var int
     */
    protected ?int $networkType = null;
    /**
     * Subscription connection type
     * - 0 -> DHCP
     * - 1 -> STATIC
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
     *                         - 0 -> COMPANY
     *                         - 1 -> OTHER
     *                         - 2 -> RESIDENT
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
     *             - 0 -> COMPANY
     *             - 1 -> OTHER
     *             - 2 -> RESIDENT
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
     *                               - 0 -> DHCP
     *                               - 1 -> STATIC
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
     *             - 0 -> DHCP
     *             - 1 -> STATIC
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
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}