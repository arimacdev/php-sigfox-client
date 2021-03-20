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
     *
     * @var int
     */
    protected int $id;
    /**
     * The hardware family's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param int id Base station hardware family id.
     * - `MinHwFamily::ID_STANDARD`
     * - `MinHwFamily::ID_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MICRO`
     */
    function setId(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int Base station hardware family id.
     * - `MinHwFamily::ID_STANDARD`
     * - `MinHwFamily::ID_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MINI`
     * - `MinHwFamily::ID_ACCESS_STATION_MICRO`
     */
    function getId() : int
    {
        return $this->id;
    }
    /**
     * @param string name The hardware family's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The hardware family's name
     */
    function getName() : string
    {
        return $this->name;
    }
}