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
    protected array $query = array('lat', 'lng', 'radius', 'groupId');
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
     * @return string the id of a group to include its operator in the global coverage
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('lat' => new PrimitiveSerializer(self::class, 'lat', 'int'), 'lng' => new PrimitiveSerializer(self::class, 'lng', 'int'), 'radius' => new PrimitiveSerializer(self::class, 'radius', 'int'), 'groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}