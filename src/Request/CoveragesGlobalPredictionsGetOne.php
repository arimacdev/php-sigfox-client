<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Get coverage margins for a selected latitude and longitude, for each
 * redundancy level.
 * For more information please refer to the [Global Coverage API
 * article](https://support.sigfox.com/docs/global-coverage-api).
 * 
 */
class CoveragesGlobalPredictionsGetOne extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'lat', 'int'), new PrimitiveSerializer(self::class, 'lng', 'int'), new PrimitiveSerializer(self::class, 'radius', 'int'), new PrimitiveSerializer(self::class, 'groupId', 'string'));
    protected $query = array('lat', 'lng', 'radius', 'groupId');
    protected $validations = array('lat' => array('required'), 'lng' => array('required'), 'radius' => array('required'), 'groupId' => array('required'));
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
}