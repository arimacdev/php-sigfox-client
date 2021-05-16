<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @var int
     */
    protected ?int $lat = null;
    /**
     * the longitude
     *
     * @var int
     */
    protected ?int $lng = null;
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
     * @internal
     */
    protected array $validations = array('lat' => array('required'), 'lng' => array('required'));
    /**
     * Setter for lat
     *
     * @param int $lat the latitude
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
     * @internal
     *
     * @return int the latitude
     */
    public function getLat() : ?int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng the longitude
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
     * @internal
     *
     * @return int the longitude
     */
    public function getLng() : ?int
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
        return array('lat' => new PrimitiveSerializer('int'), 'lng' => new PrimitiveSerializer('int'), 'radius' => new PrimitiveSerializer('int'), 'groupId' => new PrimitiveSerializer('string'));
    }
}