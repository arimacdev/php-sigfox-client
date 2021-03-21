<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation service
 */
class ComputedLocation extends Definition
{
    /** computed using RSSI and position of the station (legacy) */
    public const SOURCE_RSSI_AND_POSITION_OF_THE_STATION = 0;
    /** computed using the GPS data inside the payload */
    public const SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD = 1;
    /** computed using Network location */
    public const SOURCE_NETWORK_LOCATION = 2;
    /** computed using PoI location */
    public const SOURCE_POI_LOCATION = 3;
    /** computed using HD network location */
    public const SOURCE_HD_NETWORK_LOCATION = 4;
    /** computed using private database location */
    public const SOURCE_PRIVATE_DATABASE_LOCATION = 5;
    /** computed using WiFi location */
    public const SOURCE_WIFI_LOCATION = 6;
    /** computed using Proximity location */
    public const SOURCE_PROXIMITY_LOCATION = 7;
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
     * The radius of the circle (meters)
     *
     * @var int
     */
    protected ?int $radius = null;
    /**
     * Define how the location has been computed:
     * - `ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `ComputedLocation::SOURCE_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_POI_LOCATION`
     * - `ComputedLocation::SOURCE_HD_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION`
     * - `ComputedLocation::SOURCE_WIFI_LOCATION`
     * - `ComputedLocation::SOURCE_PROXIMITY_LOCATION`
     *
     * @var int
     */
    protected ?int $source = null;
    /**
     * The place ids computed by the Sigfox Geolocation service
     *
     * @var string[]
     */
    protected ?array $placeIds = null;
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
    /**
     * @param int $radius The radius of the circle (meters)
     */
    function setRadius(?int $radius)
    {
        $this->radius = $radius;
    }
    /**
     * @return int The radius of the circle (meters)
     */
    function getRadius() : ?int
    {
        return $this->radius;
    }
    /**
     * @param int $source Define how the location has been computed:
     * - `ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `ComputedLocation::SOURCE_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_POI_LOCATION`
     * - `ComputedLocation::SOURCE_HD_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION`
     * - `ComputedLocation::SOURCE_WIFI_LOCATION`
     * - `ComputedLocation::SOURCE_PROXIMITY_LOCATION`
     */
    function setSource(?int $source)
    {
        $this->source = $source;
    }
    /**
     * @return int Define how the location has been computed:
     * - `ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION`
     * - `ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD`
     * - `ComputedLocation::SOURCE_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_POI_LOCATION`
     * - `ComputedLocation::SOURCE_HD_NETWORK_LOCATION`
     * - `ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION`
     * - `ComputedLocation::SOURCE_WIFI_LOCATION`
     * - `ComputedLocation::SOURCE_PROXIMITY_LOCATION`
     */
    function getSource() : ?int
    {
        return $this->source;
    }
    /**
     * @param string[] $placeIds The place ids computed by the Sigfox Geolocation service
     */
    function setPlaceIds(?array $placeIds)
    {
        $this->placeIds = $placeIds;
    }
    /**
     * @return string[] The place ids computed by the Sigfox Geolocation service
     */
    function getPlaceIds() : ?array
    {
        return $this->placeIds;
    }
}