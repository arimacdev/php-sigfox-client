<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
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
     *
     * @var string
     */
    protected string $id;
    /**
     * The base station name
     *
     * @var string
     */
    protected string $name;
    /**
     * Resource type.
     * - `MinBaseStationWithType::RESOURCE_TYPE_SBS`
     * - `MinBaseStationWithType::RESOURCE_TYPE_NAP`
     *
     * @var int
     */
    protected int $resourceType;
    /** @var Actions */
    protected Actions $actions;
}