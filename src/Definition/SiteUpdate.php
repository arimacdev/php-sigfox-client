<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseSite;
class SiteUpdate extends BaseSite
{
    /**
     * ISO 3166-1 UN M.49 country code of the site location.
     * The first code is the country (region and department available for some countries).
     *
     * @var int[]
     */
    protected ?array $location = null;
    /**
     * @param int[] $location ISO 3166-1 UN M.49 country code of the site location.
     * The first code is the country (region and department available for some countries).
     */
    function setLocation(?array $location)
    {
        $this->location = $location;
    }
    /**
     * @return int[] ISO 3166-1 UN M.49 country code of the site location.
     * The first code is the country (region and department available for some countries).
     */
    function getLocation() : ?array
    {
        return $this->location;
    }
}