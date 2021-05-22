<?php

namespace Arimac\Sigfox\Model\GlobalCoverageRequest;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
class LocationsItem extends Model
{
    /**
     * A latitude in degrees. Must be between -90° and 90°.
     *
     * @var double
     */
    protected ?float $lat = null;
    /**
     * A longitude in degrees. Must be between -180° and 180°.
     *
     * @var double
     */
    protected ?float $lng = null;
    /**
     * Setter for lat
     *
     * @param double $lat A latitude in degrees. Must be between -90° and 90°.
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
     * @return double A latitude in degrees. Must be between -90° and 90°.
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng A longitude in degrees. Must be between -180° and 180°.
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
     * @return double A longitude in degrees. Must be between -180° and 180°.
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
        $rules = array('lat' => array(new Required()), 'lng' => array(new Required()));
        return $rules;
    }
}