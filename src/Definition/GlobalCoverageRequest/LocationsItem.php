<?php

namespace Arimac\Sigfox\Definition\GlobalCoverageRequest;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class LocationsItem extends Definition
{
    /**
     * A latitude in degrees. Must be between -90° and 90°.
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * A longitude in degrees. Must be between -180° and 180°.
     *
     * @var int
     */
    protected ?int $lng = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'lat', 'int'), new PrimitiveSerializer(self::class, 'lng', 'int'));
    protected $validations = array('lat' => array('required'), 'lng' => array('required'));
    /**
     * Setter for lat
     *
     * @param int $lat A latitude in degrees. Must be between -90° and 90°.
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
     * @return int A latitude in degrees. Must be between -90° and 90°.
     */
    public function getLat() : int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng A longitude in degrees. Must be between -180° and 180°.
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
     * @return int A longitude in degrees. Must be between -180° and 180°.
     */
    public function getLng() : int
    {
        return $this->lng;
    }
}