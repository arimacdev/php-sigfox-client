<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve Sigfox Monarch coverage kmz from a job
 * 
 */
class TilesMonarchKmzJobIdTileskmzGetCoverage extends Definition
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
    protected $query = array('zoom', 'north', 'south', 'west', 'east');
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
}