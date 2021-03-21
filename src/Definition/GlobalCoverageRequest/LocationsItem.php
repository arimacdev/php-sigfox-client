<?php

namespace Arimac\Sigfox\Definition\GlobalCoverageRequest;

use Arimac\Sigfox\Definition;
class LocationsItem extends Definition
{
    protected $required = array('lat', 'lng');
    /**
     * A latitude in degrees. Must be between -90° and 90°.
     *
     * @var float
     */
    protected float $lat;
    /**
     * A longitude in degrees. Must be between -180° and 180°.
     *
     * @var float
     */
    protected float $lng;
    /**
     * @param float $lat A latitude in degrees. Must be between -90° and 90°.
     */
    function setLat(float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return float A latitude in degrees. Must be between -90° and 90°.
     */
    function getLat() : float
    {
        return $this->lat;
    }
    /**
     * @param float $lng A longitude in degrees. Must be between -180° and 180°.
     */
    function setLng(float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return float A longitude in degrees. Must be between -180° and 180°.
     */
    function getLng() : float
    {
        return $this->lng;
    }
}