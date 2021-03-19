<?php

namespace Arimac\Sigfox\Definition;

/**
 * minimal information about Hardware Family.
 */
class MinHwFamily
{
    /** STANDARD */
    public const ID_STANDARD = 0;
    /** MINI */
    public const ID_MINI = 1;
    /** ACCESS STATION MINI */
    public const ID_ACCESS_STATION_MINI = 2;
    /** ACCESS STATION MICRO */
    public const ID_ACCESS_STATION_MICRO = 3;
    /**
     * Base station hardware family id.
     * - `MinHwFamily::ID_STANDARD`
     * - `MinHwFamily::ID_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MICRO`
     */
    protected int $id;
    /**
     * The hardware family's name
     */
    protected string $name;
}