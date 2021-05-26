<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\Min;
/**
 * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not require
 * a previous calculation
 */
class TilesPublicCoverageKmzTiles extends Request
{
    /**
     * The zoom level used to generate kmz file
     *
     * @var int
     */
    protected ?int $zoom = null;
    /**
     * The north boundary to extract coverage
     *
     * @var int
     */
    protected ?int $north = null;
    /**
     * The south boundary to extract coverage
     *
     * @var int
     */
    protected ?int $south = null;
    /**
     * The west boundary to extract coverage
     *
     * @var int
     */
    protected ?int $west = null;
    /**
     * The east boundary to extract coverage
     *
     * @var int
     */
    protected ?int $east = null;
    /**
     * @internal
     */
    protected array $query = array('zoom', 'north', 'south', 'west', 'east');
    /**
     * Setter for zoom
     *
     * @param int $zoom The zoom level used to generate kmz file
     *
     * @return static To use in method chains
     */
    public function setZoom(?int $zoom)
    {
        $this->zoom = $zoom;
        return $this;
    }
    /**
     * Getter for zoom
     *
     * @internal
     *
     * @return int The zoom level used to generate kmz file
     */
    public function getZoom() : ?int
    {
        return $this->zoom;
    }
    /**
     * Setter for north
     *
     * @param int $north The north boundary to extract coverage
     *
     * @return static To use in method chains
     */
    public function setNorth(?int $north)
    {
        $this->north = $north;
        return $this;
    }
    /**
     * Getter for north
     *
     * @internal
     *
     * @return int The north boundary to extract coverage
     */
    public function getNorth() : ?int
    {
        return $this->north;
    }
    /**
     * Setter for south
     *
     * @param int $south The south boundary to extract coverage
     *
     * @return static To use in method chains
     */
    public function setSouth(?int $south)
    {
        $this->south = $south;
        return $this;
    }
    /**
     * Getter for south
     *
     * @internal
     *
     * @return int The south boundary to extract coverage
     */
    public function getSouth() : ?int
    {
        return $this->south;
    }
    /**
     * Setter for west
     *
     * @param int $west The west boundary to extract coverage
     *
     * @return static To use in method chains
     */
    public function setWest(?int $west)
    {
        $this->west = $west;
        return $this;
    }
    /**
     * Getter for west
     *
     * @internal
     *
     * @return int The west boundary to extract coverage
     */
    public function getWest() : ?int
    {
        return $this->west;
    }
    /**
     * Setter for east
     *
     * @param int $east The east boundary to extract coverage
     *
     * @return static To use in method chains
     */
    public function setEast(?int $east)
    {
        $this->east = $east;
        return $this;
    }
    /**
     * Getter for east
     *
     * @internal
     *
     * @return int The east boundary to extract coverage
     */
    public function getEast() : ?int
    {
        return $this->east;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('zoom' => new PrimitiveSerializer('int'), 'north' => new PrimitiveSerializer('int'), 'south' => new PrimitiveSerializer('int'), 'west' => new PrimitiveSerializer('int'), 'east' => new PrimitiveSerializer('int'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('zoom' => array(new Required(), new Max(11), new Min(0)), 'north' => array(new Required(), new Max(90), new Min(-90)), 'south' => array(new Required(), new Max(90), new Min(-90)), 'west' => array(new Required(), new Max(180), new Min(-180)), 'east' => array(new Required(), new Max(180), new Min(-180)));
        return $rules;
    }
}