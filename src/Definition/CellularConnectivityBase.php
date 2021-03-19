<?php

namespace Arimac\Sigfox\Definition;

class CellularConnectivityBase
{
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
     */
    protected ?string $name;
    /**
     * The APN used to connect to the base station with this cellular connectivity configuration
     */
    protected ?string $apn;
    /**
     * The username used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    protected string $username;
    /**
     * The password used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    protected string $password;
    /**
     * The PIN used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    protected string $pin;
    /**
     * Indicates if the cellular connectivity is registered on a roaming network.
     */
    protected bool $roaming;
    /**
     * Configuration origin of the connectivity
     * - `CellularConnectivityBase::SOURCE_REMOTE`
     * - `CellularConnectivityBase::SOURCE_OTHERS`
     * - `CellularConnectivityBase::SOURCE_DEFAULT`
     * - `CellularConnectivityBase::SOURCE_TOOLS`
     */
    protected int $source;
}