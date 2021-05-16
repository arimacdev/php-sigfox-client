<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve Sigfox Monarch coverage kmz from a job
 */
class TilesMonarchKmzJobIdTileskmzGetCoverage extends Request
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
     * @internal
     */
    protected array $validations = array('zoom' => array('required', 'max:11', 'min:0', 'numeric'), 'north' => array('required', 'max:90', 'min:-90', 'numeric'), 'south' => array('required', 'max:90', 'min:-90', 'numeric'), 'west' => array('required', 'max:180', 'min:-180', 'numeric'), 'east' => array('required', 'max:180', 'min:-180', 'numeric'));
    /**
     * Setter for zoom
     *
     * @param int $zoom The zoom level used to generate kmz file
     *
     * @return self To use in method chains
     */
    public function setZoom(?int $zoom) : self
    {
        $this->zoom = $zoom;
        return $this;
    }
    /**
     * Getter for zoom
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
     * @return self To use in method chains
     */
    public function setNorth(?int $north) : self
    {
        $this->north = $north;
        return $this;
    }
    /**
     * Getter for north
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
     * @return self To use in method chains
     */
    public function setSouth(?int $south) : self
    {
        $this->south = $south;
        return $this;
    }
    /**
     * Getter for south
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
     * @return self To use in method chains
     */
    public function setWest(?int $west) : self
    {
        $this->west = $west;
        return $this;
    }
    /**
     * Getter for west
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
     * @return self To use in method chains
     */
    public function setEast(?int $east) : self
    {
        $this->east = $east;
        return $this;
    }
    /**
     * Getter for east
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
        return array('zoom' => new PrimitiveSerializer(self::class, 'zoom', 'int'), 'north' => new PrimitiveSerializer(self::class, 'north', 'int'), 'south' => new PrimitiveSerializer(self::class, 'south', 'int'), 'west' => new PrimitiveSerializer(self::class, 'west', 'int'), 'east' => new PrimitiveSerializer(self::class, 'east', 'int'));
    }
}