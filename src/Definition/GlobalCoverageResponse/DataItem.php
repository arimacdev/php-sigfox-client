<?php

namespace Arimac\Sigfox\Definition\GlobalCoverageResponse;

use Arimac\Sigfox\Definition;
class DataItem extends Definition
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
     * True, if the requested location is considered covered.
     *
     * @var bool
     */
    protected ?bool $locationCovered = null;
    /**
     * The margins values (dB) for redundancy level 1, 2 and 3.
     *
     * @var int[]
     */
    protected ?array $margins = null;
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
    /**
     * @param bool $locationCovered True, if the requested location is considered covered.
     */
    function setLocationCovered(?bool $locationCovered)
    {
        $this->locationCovered = $locationCovered;
    }
    /**
     * @return bool True, if the requested location is considered covered.
     */
    function getLocationCovered() : ?bool
    {
        return $this->locationCovered;
    }
    /**
     * @param int[] $margins The margins values (dB) for redundancy level 1, 2 and 3.
     */
    function setMargins(?array $margins)
    {
        $this->margins = $margins;
    }
    /**
     * @return int[] The margins values (dB) for redundancy level 1, 2 and 3.
     */
    function getMargins() : ?array
    {
        return $this->margins;
    }
}