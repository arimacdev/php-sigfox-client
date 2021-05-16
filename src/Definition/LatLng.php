<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class LatLng extends Definition
{
    /**
     * The latitude in degrees.
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * The longitude in degrees.
     *
     * @var int
     */
    protected ?int $lng = null;
    protected array $validations = array('lat' => array('max:90', 'min:-90', 'numeric', 'nullable'), 'lng' => array('max:180', 'min:-180', 'numeric', 'nullable'));
    /**
     * Setter for lat
     *
     * @param int $lat The latitude in degrees.
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
     * @return int The latitude in degrees.
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng The longitude in degrees.
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
     * @return int The longitude in degrees.
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