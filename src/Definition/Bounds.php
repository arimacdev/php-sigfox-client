<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\LatLng;
use Arimac\Sigfox\Definition\LatLng;
use Arimac\Sigfox\Definition;
/**
 * Geographics bounds
 */
class Bounds extends Definition
{
    /** @var LatLng */
    protected ?LatLng $sw = null;
    /** @var LatLng */
    protected ?LatLng $ne = null;
    protected $objects = array('sw' => '\\Arimac\\Sigfox\\Definition\\LatLng', 'ne' => '\\Arimac\\Sigfox\\Definition\\LatLng');
    /**
     * @param LatLng sw
     */
    function setSw(?LatLng $sw)
    {
        $this->sw = $sw;
    }
    /**
     * @return LatLng sw
     */
    function getSw() : ?LatLng
    {
        return $this->sw;
    }
    /**
     * @param LatLng ne
     */
    function setNe(?LatLng $ne)
    {
        $this->ne = $ne;
    }
    /**
     * @return LatLng ne
     */
    function getNe() : ?LatLng
    {
        return $this->ne;
    }
}