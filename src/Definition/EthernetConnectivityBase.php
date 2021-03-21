<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class EthernetConnectivityBase extends Definition
{
    /** STATIC */
    public const TYPE_STATIC = 1;
    /** PARTLY_DYNAMIC */
    public const TYPE_PARTLY_DYNAMIC = 2;
    /** REMOTE (Configuration provided by Cloud) */
    public const SOURCE_REMOTE = 0;
    /** OTHERS (From shell console and other origins) */
    public const SOURCE_OTHERS = 1;
    /** DEFAULT (Auto-Generated) */
    public const SOURCE_DEFAULT = 2;
    /** TOOLS (Factory, AAT or secure-control) */
    public const SOURCE_TOOLS = 3;
    protected $required = array('name', 'type');
    /**
     * The name of the configuration
     *
     * @var string
     */
    protected string $name;
    /**
     * Token's type of an ethernet connectivity configuration
     * - `EthernetConnectivityBase::TYPE_STATIC`
     * - `EthernetConnectivityBase::TYPE_PARTLY_DYNAMIC`
     *
     * @var int
     */
    protected int $type;
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
     * DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be unset by setting the value as an empty string.
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
     * MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset by setting the value to null.
     *
     * @var int
     */
    protected ?int $mtu = null;
    /**
     * Configuration origin of the connectivity
     * - `EthernetConnectivityBase::SOURCE_REMOTE`
     * - `EthernetConnectivityBase::SOURCE_OTHERS`
     * - `EthernetConnectivityBase::SOURCE_DEFAULT`
     * - `EthernetConnectivityBase::SOURCE_TOOLS`
     *
     * @var int
     */
    protected ?int $source = null;
    /**
     * @param string $name The name of the configuration
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The name of the configuration
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param int $type Token's type of an ethernet connectivity configuration
     * - `EthernetConnectivityBase::TYPE_STATIC`
     * - `EthernetConnectivityBase::TYPE_PARTLY_DYNAMIC`
     */
    function setType(int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Token's type of an ethernet connectivity configuration
     * - `EthernetConnectivityBase::TYPE_STATIC`
     * - `EthernetConnectivityBase::TYPE_PARTLY_DYNAMIC`
     */
    function getType() : int
    {
        return $this->type;
    }
    /**
     * @param string $ip IP address of the ethernet connectivity, required if the type is STATIC
     */
    function setIp(?string $ip)
    {
        $this->ip = $ip;
    }
    /**
     * @return string IP address of the ethernet connectivity, required if the type is STATIC
     */
    function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * @param string $mask Subnet mask of the ethernet connectivity, required if the type is STATIC
     */
    function setMask(?string $mask)
    {
        $this->mask = $mask;
    }
    /**
     * @return string Subnet mask of the ethernet connectivity, required if the type is STATIC
     */
    function getMask() : ?string
    {
        return $this->mask;
    }
    /**
     * @param string $dns1 DNS n°1 of the ethernet connectivity, required if the type is STATIC
     */
    function setDns1(?string $dns1)
    {
        $this->dns1 = $dns1;
    }
    /**
     * @return string DNS n°1 of the ethernet connectivity, required if the type is STATIC
     */
    function getDns1() : ?string
    {
        return $this->dns1;
    }
    /**
     * @param string $dns2 DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be unset by setting the value as an empty string.
     */
    function setDns2(?string $dns2)
    {
        $this->dns2 = $dns2;
    }
    /**
     * @return string DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be unset by setting the value as an empty string.
     */
    function getDns2() : ?string
    {
        return $this->dns2;
    }
    /**
     * @param string $gateway Gateway of the ethernet connectivity, required if the type is STATIC
     */
    function setGateway(?string $gateway)
    {
        $this->gateway = $gateway;
    }
    /**
     * @return string Gateway of the ethernet connectivity, required if the type is STATIC
     */
    function getGateway() : ?string
    {
        return $this->gateway;
    }
    /**
     * @param int $mtu MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset by setting the value to null.
     */
    function setMtu(?int $mtu)
    {
        $this->mtu = $mtu;
    }
    /**
     * @return int MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset by setting the value to null.
     */
    function getMtu() : ?int
    {
        return $this->mtu;
    }
    /**
     * @param int $source Configuration origin of the connectivity
     * - `EthernetConnectivityBase::SOURCE_REMOTE`
     * - `EthernetConnectivityBase::SOURCE_OTHERS`
     * - `EthernetConnectivityBase::SOURCE_DEFAULT`
     * - `EthernetConnectivityBase::SOURCE_TOOLS`
     */
    function setSource(?int $source)
    {
        $this->source = $source;
    }
    /**
     * @return int Configuration origin of the connectivity
     * - `EthernetConnectivityBase::SOURCE_REMOTE`
     * - `EthernetConnectivityBase::SOURCE_OTHERS`
     * - `EthernetConnectivityBase::SOURCE_DEFAULT`
     * - `EthernetConnectivityBase::SOURCE_TOOLS`
     */
    function getSource() : ?int
    {
        return $this->source;
    }
}