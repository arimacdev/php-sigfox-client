<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation
 * service
 */
class ComputedLocation extends Definition
{
    /**
     * computed using RSSI and position of the station (legacy)
     */
    public const SOURCE_RSSI_AND_POSITION_OF_THE_STATION = 0;
    /**
     * computed using the GPS data inside the payload
     */
    public const SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD = 1;
    /**
     * computed using Network location
     */
    public const SOURCE_NETWORK_LOCATION = 2;
    /**
     * computed using PoI location
     */
    public const SOURCE_POI_LOCATION = 3;
    /**
     * computed using HD network location
     */
    public const SOURCE_HD_NETWORK_LOCATION = 4;
    /**
     * computed using private database location
     */
    public const SOURCE_PRIVATE_DATABASE_LOCATION = 5;
    /**
     * computed using WiFi location
     */
    public const SOURCE_WIFI_LOCATION = 6;
    /**
     * computed using Proximity location
     */
    public const SOURCE_PROXIMITY_LOCATION = 7;
    /**
     * The device's estimated latitude
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * The device's estimated longitude
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * The radius of the circle (meters)
     *
     * @var int
     */
    protected ?int $radius = null;
    /**
     * Define how the location has been computed:
     * 
     * - {@see ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION}
     * - {@see ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     * - {@see ComputedLocation::SOURCE_NETWORK_LOCATION}
     * - {@see ComputedLocation::SOURCE_POI_LOCATION}
     * - {@see ComputedLocation::SOURCE_HD_NETWORK_LOCATION}
     * - {@see ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION}
     * - {@see ComputedLocation::SOURCE_WIFI_LOCATION}
     * - {@see ComputedLocation::SOURCE_PROXIMITY_LOCATION}
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
     * Setter for lat
     *
     * @param int $lat The device's estimated latitude
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
     * @return int The device's estimated latitude
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng The device's estimated longitude
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
     * @return int The device's estimated longitude
     */
    public function getLng() : ?int
    {
        return $this->lng;
    }
    /**
     * Setter for radius
     *
     * @param int $radius The radius of the circle (meters)
     *
     * @return self To use in method chains
     */
    public function setRadius(?int $radius) : self
    {
        $this->radius = $radius;
        return $this;
    }
    /**
     * Getter for radius
     *
     * @return int The radius of the circle (meters)
     */
    public function getRadius() : ?int
    {
        return $this->radius;
    }
    /**
     * Setter for source
     *
     * @param int $source Define how the location has been computed:
     *                    
     *                    - {@see ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION}
     *                    - {@see ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     *                    - {@see ComputedLocation::SOURCE_NETWORK_LOCATION}
     *                    - {@see ComputedLocation::SOURCE_POI_LOCATION}
     *                    - {@see ComputedLocation::SOURCE_HD_NETWORK_LOCATION}
     *                    - {@see ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION}
     *                    - {@see ComputedLocation::SOURCE_WIFI_LOCATION}
     *                    - {@see ComputedLocation::SOURCE_PROXIMITY_LOCATION}
     *                    
     *
     * @return self To use in method chains
     */
    public function setSource(?int $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Getter for source
     *
     * @return int Define how the location has been computed:
     *             
     *             - {@see ComputedLocation::SOURCE_RSSI_AND_POSITION_OF_THE_STATION}
     *             - {@see ComputedLocation::SOURCE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     *             - {@see ComputedLocation::SOURCE_NETWORK_LOCATION}
     *             - {@see ComputedLocation::SOURCE_POI_LOCATION}
     *             - {@see ComputedLocation::SOURCE_HD_NETWORK_LOCATION}
     *             - {@see ComputedLocation::SOURCE_PRIVATE_DATABASE_LOCATION}
     *             - {@see ComputedLocation::SOURCE_WIFI_LOCATION}
     *             - {@see ComputedLocation::SOURCE_PROXIMITY_LOCATION}
     *             
     */
    public function getSource() : ?int
    {
        return $this->source;
    }
    /**
     * Setter for placeIds
     *
     * @param string[] $placeIds The place ids computed by the Sigfox Geolocation service
     *
     * @return self To use in method chains
     */
    public function setPlaceIds(?array $placeIds) : self
    {
        $this->placeIds = $placeIds;
        return $this;
    }
    /**
     * Getter for placeIds
     *
     * @return string[] The place ids computed by the Sigfox Geolocation service
     */
    public function getPlaceIds() : ?array
    {
        return $this->placeIds;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('lat' => new PrimitiveSerializer(self::class, 'lat', 'int'), 'lng' => new PrimitiveSerializer(self::class, 'lng', 'int'), 'radius' => new PrimitiveSerializer(self::class, 'radius', 'int'), 'source' => new PrimitiveSerializer(self::class, 'source', 'int'), 'placeIds' => new ArraySerializer(self::class, 'placeIds', new PrimitiveSerializer(self::class, 'placeIds', 'string')));
    }
}