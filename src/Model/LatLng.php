<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\Min;
class LatLng extends Model
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('lat' => array(new Max(90), new Min(-90)), 'lng' => array(new Max(180), new Min(-180)));
        return $rules;
    }
}