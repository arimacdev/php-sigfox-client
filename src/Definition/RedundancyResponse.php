<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Service Coverage Redundancy API
 */
class RedundancyResponse
{
    /**
     * The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base stations or more
     */
    protected int $redundancy;
}