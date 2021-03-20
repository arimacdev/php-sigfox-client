<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation service
 */
class LastComputedLocation
{
    /** computed using RSSI and position of the station (legacy) */
    public const SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION = 0;
    /** computed using the GPS data inside the payload */
    public const SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD = 1;
    /** computed using Network location */
    public const SOURCE_CODE_NETWORK_LOCATION = 2;
    /** computed using PoI location */
    public const SOURCE_CODE_POI_LOCATION = 3;
    /** computed using HD network location */
    public const SOURCE_CODE_HD_NETWORK_LOCATION = 4;
    /** computed using private database location */
    public const SOURCE_CODE_PRIVATE_DATABASE_LOCATION = 5;
    /** computed using WiFi location */
    public const SOURCE_CODE_WIFI_LOCATION = 6;
    /** computed using Proximity location */
    public const SOURCE_CODE_PROXIMITY_LOCATION = 7;
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
     * The radius of the circle (meters)
     *
     * @var int
     */
    protected int $radius;
    /**
     * Define how the location has been computed:
     * - `LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_POI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_WIFI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION`
     *
     * @var int
     */
    protected int $sourceCode;
    /**
     * The place ids computed by the Sigfox Geolocation service
     *
     * @var string[]
     */
    protected array $placeIds;
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
    /**
     * @param int radius The radius of the circle (meters)
     */
    function setRadius(int $radius)
    {
        $this->radius = $radius;
    }
    /**
     * @return int The radius of the circle (meters)
     */
    function getRadius() : int
    {
        return $this->radius;
    }
    /**
     * @param int sourceCode Define how the location has been computed:
     * - `LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_POI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_WIFI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION`
     */
    function setSourceCode(int $sourceCode)
    {
        $this->sourceCode = $sourceCode;
    }
    /**
     * @return int Define how the location has been computed:
     * - `LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_POI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_WIFI_LOCATION`
     * - `LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION`
     */
    function getSourceCode() : int
    {
        return $this->sourceCode;
    }
    /**
     * @param string[] placeIds The place ids computed by the Sigfox Geolocation service
     */
    function setPlaceIds(array $placeIds)
    {
        $this->placeIds = $placeIds;
    }
    /**
     * @return string[] The place ids computed by the Sigfox Geolocation service
     */
    function getPlaceIds() : array
    {
        return $this->placeIds;
    }
}