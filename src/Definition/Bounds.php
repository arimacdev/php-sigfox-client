<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\LatLng;
use Arimac\Sigfox\Definition\LatLng;
/**
 * Geographics bounds
 */
class Bounds
{
    /** @var LatLng */
    protected LatLng $sw;
    /** @var LatLng */
    protected LatLng $ne;
    /**
     * @param LatLng sw
     */
    function setSw(LatLng $sw)
    {
        $this->sw = $sw;
    }
    /**
     * @return LatLng sw
     */
    function getSw() : LatLng
    {
        return $this->sw;
    }
    /**
     * @param LatLng ne
     */
    function setNe(LatLng $ne)
    {
        $this->ne = $ne;
    }
    /**
     * @return LatLng ne
     */
    function getNe() : LatLng
    {
        return $this->ne;
    }
}