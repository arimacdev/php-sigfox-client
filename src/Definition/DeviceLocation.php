<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the position of the device
 */
class DeviceLocation
{
    /**
     * The device's estimated latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * The device's estimated longitude
     *
     * @var int
     */
    protected int $lng;
    /**
     * @param int lat The device's estimated latitude
     */
    function setLat(int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int The device's estimated latitude
     */
    function getLat() : int
    {
        return $this->lat;
    }
    /**
     * @param int lng The device's estimated longitude
     */
    function setLng(int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int The device's estimated longitude
     */
    function getLng() : int
    {
        return $this->lng;
    }
}