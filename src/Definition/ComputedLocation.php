<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation service
 */
class ComputedLocation
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
    protected int $source;
    /**
     * The place ids computed by the Sigfox Geolocation service
     *
     * @var string[]
     */
    protected array $placeIds;
}