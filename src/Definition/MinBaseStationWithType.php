<?php

namespace Arimac\Sigfox\Definition;

/**
 * Minimal information about a BaseStation
 */
class MinBaseStationWithType
{
    /** SBS */
    public const RESOURCE_TYPE_SBS = 0;
    /** NAP */
    public const RESOURCE_TYPE_NAP = 1;
    /**
     * The base station identifier in hexadecimal
     */
    protected string $id;
    /**
     * The base station name
     */
    protected string $name;
    /**
     * Resource type.
     * - `MinBaseStationWithType::RESOURCE_TYPE_SBS`
     * - `MinBaseStationWithType::RESOURCE_TYPE_NAP`
     */
    protected int $resourceType;
}