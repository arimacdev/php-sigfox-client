<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Contains the estimated position of the device within a circle based on the GPS data or the Sigfox Geolocation
 * service
 */
class LastComputedLocation extends Model
{
    /**
     * computed using RSSI and position of the station (legacy)
     */
    public const SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION = 0;
    /**
     * computed using the GPS data inside the payload
     */
    public const SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD = 1;
    /**
     * computed using Network location
     */
    public const SOURCE_CODE_NETWORK_LOCATION = 2;
    /**
     * computed using PoI location
     */
    public const SOURCE_CODE_POI_LOCATION = 3;
    /**
     * computed using HD network location
     */
    public const SOURCE_CODE_HD_NETWORK_LOCATION = 4;
    /**
     * computed using private database location
     */
    public const SOURCE_CODE_PRIVATE_DATABASE_LOCATION = 5;
    /**
     * computed using WiFi location
     */
    public const SOURCE_CODE_WIFI_LOCATION = 6;
    /**
     * computed using Proximity location
     */
    public const SOURCE_CODE_PROXIMITY_LOCATION = 7;
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
     * - {@see LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION}
     * - {@see LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     * - {@see LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION}
     * - {@see LastComputedLocation::SOURCE_CODE_POI_LOCATION}
     * - {@see LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION}
     * - {@see LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION}
     * - {@see LastComputedLocation::SOURCE_CODE_WIFI_LOCATION}
     * - {@see LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION}
     *
     * @var int
     */
    protected ?int $sourceCode = null;
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
     * @return self To use in method chains
     */
    public function setLat(?float $lat) : self
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
     * @return self To use in method chains
     */
    public function setLng(?float $lng) : self
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
     * Setter for sourceCode
     *
     * @param int $sourceCode Define how the location has been computed:
     *                        
     *                        - {@see LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     *                        - {@see LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_POI_LOCATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_WIFI_LOCATION}
     *                        - {@see LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION}
     *                        
     *
     * @return self To use in method chains
     */
    public function setSourceCode(?int $sourceCode) : self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Getter for sourceCode
     *
     * @return int Define how the location has been computed:
     *             
     *             - {@see LastComputedLocation::SOURCE_CODE_RSSI_AND_POSITION_OF_THE_STATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_THE_GPS_DATA_INSIDE_THE_PAYLOAD}
     *             - {@see LastComputedLocation::SOURCE_CODE_NETWORK_LOCATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_POI_LOCATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_HD_NETWORK_LOCATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_PRIVATE_DATABASE_LOCATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_WIFI_LOCATION}
     *             - {@see LastComputedLocation::SOURCE_CODE_PROXIMITY_LOCATION}
     *             
     */
    public function getSourceCode() : ?int
    {
        return $this->sourceCode;
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
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'radius' => new PrimitiveSerializer('int'), 'sourceCode' => new PrimitiveSerializer('int'), 'placeIds' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}