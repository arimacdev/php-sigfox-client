<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Get coverage margins for a selected latitude and longitude, for each
 * redundancy level.
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 */
class CoveragesGlobalPredictionsGetOne extends Request
{
    /**
     * the latitude
     *
     * @var double
     */
    protected ?float $lat = null;
    /**
     * the longitude
     *
     * @var double
     */
    protected ?float $lng = null;
    /**
     * The radius of the area in which the coverage results are averaged and returned for a selected location, in
     * meters.
     *
     * @var int
     */
    protected ?int $radius = null;
    /**
     * the id of a group to include its operator in the global coverage
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * @internal
     */
    protected array $query = array('lat', 'lng', 'radius', 'groupId');
    /**
     * Setter for lat
     *
     * @param double $lat the latitude
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
     * @internal
     *
     * @return double the latitude
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng the longitude
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
     * @internal
     *
     * @return double the longitude
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * Setter for radius
     *
     * @param int $radius The radius of the area in which the coverage results are averaged and returned for a
     *                    selected location, in meters.
     *                    
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
     * @internal
     *
     * @return int The radius of the area in which the coverage results are averaged and returned for a selected
     *             location, in meters.
     *             
     */
    public function getRadius() : ?int
    {
        return $this->radius;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId the id of a group to include its operator in the global coverage
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @internal
     *
     * @return string the id of a group to include its operator in the global coverage
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'radius' => new PrimitiveSerializer('int'), 'groupId' => new PrimitiveSerializer('string'));
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