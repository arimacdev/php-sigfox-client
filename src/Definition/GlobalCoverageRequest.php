<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the request to get Global Coverage
 */
class GlobalCoverageRequest
{
    /**
     * An array of positions. Valid locations have two properties, lat and lng.
     *
     * @var array
     */
    protected array $locations;
    /**
     * The radius of the area in which the coverage results are averaged and returned for a selected location, in meters.
     *
     * @var int
     */
    protected ?int $radius;
    /**
     * The id of a group to include its operator in the global coverage, in case it is not a public operator.
     *
     * @var string
     */
    protected ?string $groupId;
}