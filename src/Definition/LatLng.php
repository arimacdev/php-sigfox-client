<?php

namespace Arimac\Sigfox\Definition;

class LatLng
{
    /**
     * The latitude in degrees.
     *
     * @var int
     */
    protected int $lat;
    /**
     * The longitude in degrees.
     *
     * @var int
     */
    protected int $lng;
    /**
     * @param int lat The latitude in degrees.
     */
    function setLat(int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int The latitude in degrees.
     */
    function getLat() : int
    {
        return $this->lat;
    }
    /**
     * @param int lng The longitude in degrees.
     */
    function setLng(int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int The longitude in degrees.
     */
    function getLng() : int
    {
        return $this->lng;
    }
}