<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class TilesPublicCoverageGet extends Definition
{
    protected $required = array('zoom', 'north', 'south', 'west', 'east');
    /**
     * The zoom level used to generate kmz file
     *
     * @var int
     */
    protected int $zoom;
    /**
     * The north boundary to extract coverage
     *
     * @var int
     */
    protected int $north;
    /**
     * The south boundary to extract coverage
     *
     * @var int
     */
    protected int $south;
    /**
     * The west boundary to extract coverage
     *
     * @var int
     */
    protected int $west;
    /**
     * The east boundary to extract coverage
     *
     * @var int
     */
    protected int $east;
    protected $query = array('zoom', 'north', 'south', 'west', 'east');
    /**
     * @param int $zoom The zoom level used to generate kmz file
     */
    function setZoom(int $zoom)
    {
        $this->zoom = $zoom;
    }
    /**
     * @param int $north The north boundary to extract coverage
     */
    function setNorth(int $north)
    {
        $this->north = $north;
    }
    /**
     * @param int $south The south boundary to extract coverage
     */
    function setSouth(int $south)
    {
        $this->south = $south;
    }
    /**
     * @param int $west The west boundary to extract coverage
     */
    function setWest(int $west)
    {
        $this->west = $west;
    }
    /**
     * @param int $east The east boundary to extract coverage
     */
    function setEast(int $east)
    {
        $this->east = $east;
    }
}