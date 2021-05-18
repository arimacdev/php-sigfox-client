<?php

namespace Arimac\Sigfox\Model\GlobalCoverageBulkResponse;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class ResultsItem extends Model
{
    /**
     * The latitude in degrees.
     *
     * @var double
     */
    protected ?float $lat = null;
    /**
     * The longitude in degrees.
     *
     * @var double
     */
    protected ?float $lng = null;
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
     * @param double $lat The latitude in degrees.
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
     * @return double The latitude in degrees.
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng The longitude in degrees.
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
     * @return double The longitude in degrees.
     */
    public function getLng() : ?float
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
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'locationCovered' => new PrimitiveSerializer('bool'), 'margins' => new ArraySerializer(new PrimitiveSerializer('int')));
        return $serializers;
    }
}