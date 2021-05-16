<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Contains the position of the device
 */
class DeviceLocation extends Definition
{
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
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('lat' => new PrimitiveSerializer(self::class, 'lat', 'int'), 'lng' => new PrimitiveSerializer(self::class, 'lng', 'int'));
    }
}