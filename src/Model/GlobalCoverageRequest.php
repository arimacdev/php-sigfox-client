<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\GlobalCoverageRequest\LocationsItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Defines the request to get Global Coverage
 */
class GlobalCoverageRequest extends Model
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
    /**
     * Setter for locations
     *
     * @param LocationsItem[] $locations An array of positions. Valid locations have two properties, lat and lng.
     *
     * @return static To use in method chains
     */
    public function setLocations(?array $locations)
    {
        $this->locations = $locations;
        return $this;
    }
    /**
     * Getter for locations
     *
     * @return LocationsItem[] An array of positions. Valid locations have two properties, lat and lng.
     */
    public function getLocations() : ?array
    {
        return $this->locations;
    }
    /**
     * Setter for radius
     *
     * @param int $radius The radius of the area in which the coverage results are averaged and returned for a
     *                    selected location, in meters.
     *
     * @return static To use in method chains
     */
    public function setRadius(?int $radius)
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
    public function getRadius() : ?int
    {
        return $this->radius;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId The id of a group to include its operator in the global coverage, in case it is not a
     *                        public operator.
     *
     * @return static To use in method chains
     */
    public function setGroupId(?string $groupId)
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
        $serializers = array('locations' => new ArraySerializer(new ClassSerializer(LocationsItem::class)), 'radius' => new PrimitiveSerializer('int'), 'groupId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('locations' => array(new Required(), new ChildSet()));
        return $rules;
    }
}