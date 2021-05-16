<?php

namespace Arimac\Sigfox\Definition\GlobalCoverageResponse;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class DataItem extends Definition
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
    /**
     * True, if the requested location is considered covered.
     *
     * @var bool
     */
    protected ?bool $locationCovered = null;
    /**
     * The margins values (dB) for redundancy level 1, 2 and 3.
     *
     * @var int[]
     */
    protected ?array $margins = null;
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
     * Setter for locationCovered
     *
     * @param bool $locationCovered True, if the requested location is considered covered.
     *
     * @return self To use in method chains
     */
    public function setLocationCovered(?bool $locationCovered) : self
    {
        $this->locationCovered = $locationCovered;
        return $this;
    }
    /**
     * Getter for locationCovered
     *
     * @return bool True, if the requested location is considered covered.
     */
    public function getLocationCovered() : ?bool
    {
        return $this->locationCovered;
    }
    /**
     * Setter for margins
     *
     * @param int[] $margins The margins values (dB) for redundancy level 1, 2 and 3.
     *
     * @return self To use in method chains
     */
    public function setMargins(?array $margins) : self
    {
        $this->margins = $margins;
        return $this;
    }
    /**
     * Getter for margins
     *
     * @return int[] The margins values (dB) for redundancy level 1, 2 and 3.
     */
    public function getMargins() : ?array
    {
        return $this->margins;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('lat' => new PrimitiveSerializer(self::class, 'lat', 'int'), 'lng' => new PrimitiveSerializer(self::class, 'lng', 'int'), 'locationCovered' => new PrimitiveSerializer(self::class, 'locationCovered', 'bool'), 'margins' => new ArraySerializer(self::class, 'margins', new PrimitiveSerializer(self::class, 'margins', 'int')));
    }
}