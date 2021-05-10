<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class EthernetConnectivityBase extends Definition
{
    /**
     * STATIC
     */
    public const TYPE_STATIC = 1;
    /**
     * PARTLY_DYNAMIC
     */
    public const TYPE_PARTLY_DYNAMIC = 2;
    /**
     * REMOTE (Configuration provided by Cloud)
     */
    public const SOURCE_REMOTE = 0;
    /**
     * OTHERS (From shell console and other origins)
     */
    public const SOURCE_OTHERS = 1;
    /**
     * DEFAULT (Auto-Generated)
     */
    public const SOURCE_DEFAULT = 2;
    /**
     * TOOLS (Factory, AAT or secure-control)
     */
    public const SOURCE_TOOLS = 3;
    /**
     * The name of the configuration
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Token's type of an ethernet connectivity configuration
     *
     * @var self::TYPE_*
     */
    protected ?int $type = null;
    /**
     * IP address of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $ip = null;
    /**
     * Subnet mask of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $mask = null;
    /**
     * DNS n°1 of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $dns1 = null;
    /**
     * DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be unset by
     * setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $dns2 = null;
    /**
     * Gateway of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $gateway = null;
    /**
     * MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset by setting
     * the value to null.
     *
     * @var int
     */
    protected ?int $mtu = null;
    /**
     * Configuration origin of the connectivity
     *
     * @var self::SOURCE_*
     */
    protected ?int $source = null;
    /**
     * Setter for name
     *
     * @param string $name The name of the configuration
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The name of the configuration
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for type
     *
     * @param self::TYPE_* $type Token's type of an ethernet connectivity configuration
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return self::TYPE_* Token's type of an ethernet connectivity configuration
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Setter for ip
     *
     * @param string $ip IP address of the ethernet connectivity, required if the type is STATIC
     *
     * @return self To use in method chains
     */
    public function setIp(?string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * Getter for ip
     *
     * @return string IP address of the ethernet connectivity, required if the type is STATIC
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * Setter for mask
     *
     * @param string $mask Subnet mask of the ethernet connectivity, required if the type is STATIC
     *
     * @return self To use in method chains
     */
    public function setMask(?string $mask) : self
    {
        $this->mask = $mask;
        return $this;
    }
    /**
     * Getter for mask
     *
     * @return string Subnet mask of the ethernet connectivity, required if the type is STATIC
     */
    public function getMask() : string
    {
        return $this->mask;
    }
    /**
     * Setter for dns1
     *
     * @param string $dns1 DNS n°1 of the ethernet connectivity, required if the type is STATIC
     *
     * @return self To use in method chains
     */
    public function setDns1(?string $dns1) : self
    {
        $this->dns1 = $dns1;
        return $this;
    }
    /**
     * Getter for dns1
     *
     * @return string DNS n°1 of the ethernet connectivity, required if the type is STATIC
     */
    public function getDns1() : string
    {
        return $this->dns1;
    }
    /**
     * Setter for dns2
     *
     * @param string $dns2 DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field
     *                     can be unset by setting the value as an empty string.
     *
     * @return self To use in method chains
     */
    public function setDns2(?string $dns2) : self
    {
        $this->dns2 = $dns2;
        return $this;
    }
    /**
     * Getter for dns2
     *
     * @return string DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be
     *                unset by setting the value as an empty string.
     */
    public function getDns2() : string
    {
        return $this->dns2;
    }
    /**
     * Setter for gateway
     *
     * @param string $gateway Gateway of the ethernet connectivity, required if the type is STATIC
     *
     * @return self To use in method chains
     */
    public function setGateway(?string $gateway) : self
    {
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * Getter for gateway
     *
     * @return string Gateway of the ethernet connectivity, required if the type is STATIC
     */
    public function getGateway() : string
    {
        return $this->gateway;
    }
    /**
     * Setter for mtu
     *
     * @param int $mtu MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be
     *                 unset by setting the value to null.
     *
     * @return self To use in method chains
     */
    public function setMtu(?int $mtu) : self
    {
        $this->mtu = $mtu;
        return $this;
    }
    /**
     * Getter for mtu
     *
     * @return int MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset
     *             by setting the value to null.
     */
    public function getMtu() : int
    {
        return $this->mtu;
    }
    /**
     * Setter for source
     *
     * @param self::SOURCE_* $source Configuration origin of the connectivity
     *
     * @return self To use in method chains
     */
    public function setSource(?int $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Getter for source
     *
     * @return self::SOURCE_* Configuration origin of the connectivity
     */
    public function getSource() : int
    {
        return $this->source;
    }
}