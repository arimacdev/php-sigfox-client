<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class LatLng extends Definition
{
    /**
     * The latitude in degrees.
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * The longitude in degrees.
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * Setter for lat
     *
     * @param int $lat The latitude in degrees.
     *
     * @return self To use in method chains
     */
    public function setLat(?int $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return int The latitude in degrees.
     */
    public function getLat() : int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng The longitude in degrees.
     *
     * @return self To use in method chains
     */
    public function setLng(?int $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return int The longitude in degrees.
     */
    public function getLng() : int
    {
        return $this->lng;
    }
}