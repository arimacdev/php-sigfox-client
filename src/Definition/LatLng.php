<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class LatLng extends Definition
{
    /**
     * The latitude in degrees.
     *
     * @var float
     */
    protected ?float $lat = null;
    /**
     * The longitude in degrees.
     *
     * @var float
     */
    protected ?float $lng = null;
    /**
     * @param float $lat The latitude in degrees.
     */
    function setLat(?float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return float The latitude in degrees.
     */
    function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * @param float $lng The longitude in degrees.
     */
    function setLng(?float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return float The longitude in degrees.
     */
    function getLng() : ?float
    {
        return $this->lng;
    }
}