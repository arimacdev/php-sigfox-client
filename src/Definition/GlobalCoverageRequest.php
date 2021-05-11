<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\GlobalCoverageRequest\LocationsItem;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the request to get Global Coverage
 */
class GlobalCoverageRequest extends Definition
{
    /**
     * An array of positions. Valid locations have two properties, lat and lng.
     *
     * @var LocationsItem[]
     */
    protected ?array $locations = null;
    /**
     * The radius of the area in which the coverage results are averaged and returned for a selected location, in
     * meters.
     *
     * @var int
     */
    protected ?int $radius = null;
    /**
     * The id of a group to include its operator in the global coverage, in case it is not a public operator.
     *
     * @var string
     */
    protected ?string $groupId = null;
    protected $serialize = array(new ArraySerializer(self::class, 'locations', new ClassSerializer(self::class, 'locations', LocationsItem::class)), new PrimitiveSerializer(self::class, 'radius', 'int'), new PrimitiveSerializer(self::class, 'groupId', 'string'));
    protected $validations = array('locations' => array('required'));
    /**
     * Setter for locations
     *
     * @param LocationsItem[] $locations An array of positions. Valid locations have two properties, lat and lng.
     *
     * @return self To use in method chains
     */
    public function setLocations(?array $locations) : self
    {
        $this->locations = $locations;
        return $this;
    }
    /**
     * Getter for locations
     *
     * @return LocationsItem[] An array of positions. Valid locations have two properties, lat and lng.
     */
    public function getLocations() : array
    {
        return $this->locations;
    }
    /**
     * Setter for radius
     *
     * @param int $radius The radius of the area in which the coverage results are averaged and returned for a
     *                    selected location, in meters.
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
     */
    public function getRadius() : int
    {
        return $this->radius;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId The id of a group to include its operator in the global coverage, in case it is not a
     *                        public operator.
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
     * @return string The id of a group to include its operator in the global coverage, in case it is not a public
     *                operator.
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
}