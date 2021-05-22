<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Contains the position of the device
 */
class DeviceLocation extends Model
{
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'));
        return $serializers;
    }
}