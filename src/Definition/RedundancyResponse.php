<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Service Coverage Redundancy API
 */
class RedundancyResponse
{
    /**
     * The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base stations or more
     *
     * @var int
     */
    protected int $redundancy;
    /**
     * @param int redundancy The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base stations or more
     */
    function setRedundancy(int $redundancy)
    {
        $this->redundancy = $redundancy;
    }
    /**
     * @return int The base station redundancy, 0 = none, 1 = 1 base station, 2 = 2 base stations, 3 = 3 base stations or more
     */
    function getRedundancy() : int
    {
        return $this->redundancy;
    }
}