<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class CoveragesGlobalPredictionsGet extends Definition
{
    protected $required = array('lat', 'lng');
    /**
     * the latitude
     *
     * @var float
     */
    protected float $lat;
    /**
     * the longitude
     *
     * @var float
     */
    protected float $lng;
    /**
     * The radius of the area in which the coverage results are averaged and returned for a selected location, in meters.
     *
     * @var int
     */
    protected ?int $radius = null;
    /**
     * the id of a group to include its operator in the global coverage
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $query = array('lat', 'lng', 'radius', 'groupId');
    /**
     * @param float $lat the latitude
     */
    function setLat(float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @param float $lng the longitude
     */
    function setLng(float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @param int $radius The radius of the area in which the coverage results are averaged and returned for a selected location, in meters.
     */
    function setRadius(?int $radius)
    {
        $this->radius = $radius;
    }
    /**
     * @param string $groupId the id of a group to include its operator in the global coverage
     */
    function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
    }
}