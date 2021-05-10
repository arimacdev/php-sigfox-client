<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Geographics bounds
 */
class Bounds extends Definition
{
    /**
     * @var LatLng
     */
    protected ?LatLng $sw = null;
    /**
     * @var LatLng
     */
    protected ?LatLng $ne = null;
    protected $serialize = array('sw' => LatLng::class, 'ne' => LatLng::class);
    /**
     * Setter for sw
     *
     * @param LatLng $sw
     *
     * @return self To use in method chains
     */
    public function setSw(?LatLng $sw) : self
    {
        $this->sw = $sw;
        return $this;
    }
    /**
     * Getter for sw
     *
     * @return LatLng
     */
    public function getSw() : LatLng
    {
        return $this->sw;
    }
    /**
     * Setter for ne
     *
     * @param LatLng $ne
     *
     * @return self To use in method chains
     */
    public function setNe(?LatLng $ne) : self
    {
        $this->ne = $ne;
        return $this;
    }
    /**
     * Getter for ne
     *
     * @return LatLng
     */
    public function getNe() : LatLng
    {
        return $this->ne;
    }
}