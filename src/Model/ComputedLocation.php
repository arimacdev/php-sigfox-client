<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation
 * service
 */
class ComputedLocation extends Model
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
     * @var double
     */
    protected ?float $lat = null;
    /**
     * The device's estimated longitude
     *
     * @var double
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
     * @param double $lat The device's estimated latitude
     *
     * @return static To use in method chains
     */
    public function setLat(?float $lat)
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return double The device's estimated latitude
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng The device's estimated longitude
     *
     * @return static To use in method chains
     */
    public function setLng(?float $lng)
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return double The device's estimated longitude
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * Setter for radius
     *
     * @param int $radius The radius of the circle (meters)
     *
     * @return static To use in method chains
     */
    public function setRadius(?int $radius)
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
     * @return static To use in method chains
     */
    public function setSource(?int $source)
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
     * @return static To use in method chains
     */
    public function setPlaceIds(?array $placeIds)
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
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'radius' => new PrimitiveSerializer('int'), 'source' => new PrimitiveSerializer('int'), 'placeIds' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}