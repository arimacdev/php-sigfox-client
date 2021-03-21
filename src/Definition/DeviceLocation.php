<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Contains the position of the device
 */
class DeviceLocation extends Definition
{
    /**
     * The device's estimated latitude
     *
     * @var float
     */
    protected ?float $lat = null;
    /**
     * The device's estimated longitude
     *
     * @var float
     */
    protected ?float $lng = null;
    /**
     * @param float $lat The device's estimated latitude
     */
    function setLat(?float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return float The device's estimated latitude
     */
    function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * @param float $lng The device's estimated longitude
     */
    function setLng(?float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return float The device's estimated longitude
     */
    function getLng() : ?float
    {
        return $this->lng;
    }
}