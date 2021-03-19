<?php

namespace Arimac\Sigfox\Definition;

class EthernetConnectivityBase
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
    protected ?string $ip;
    /**
     * Subnet mask of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $mask;
    /**
     * DNS n°1 of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $dns1;
    /**
     * DNS n°2 of the ethernet connectivity, only applicable if the type is STATIC. This field can be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $dns2;
    /**
     * Gateway of the ethernet connectivity, required if the type is STATIC
     *
     * @var string
     */
    protected ?string $gateway;
    /**
     * MTU of the ethernet connectivity, required if the type is PARTLY_DYNAMIC. This field can be unset by setting the value to null.
     *
     * @var int
     */
    protected ?int $mtu;
    /**
     * Configuration origin of the connectivity
     * - `EthernetConnectivityBase::SOURCE_REMOTE`
     * - `EthernetConnectivityBase::SOURCE_OTHERS`
     * - `EthernetConnectivityBase::SOURCE_DEFAULT`
     * - `EthernetConnectivityBase::SOURCE_TOOLS`
     *
     * @var int
     */
    protected ?int $source;
}