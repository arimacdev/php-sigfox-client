<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Bounds;
use Arimac\Sigfox\Definition;
/**
 * Defines tiles reference to display on web map
 */
class TilesResponse extends Definition
{
    /**
     * The tiles base image url
     *
     * @var string
     */
    protected ?string $baseImgUrl = null;
    /**
     * The TMS template url
     *
     * @var string
     */
    protected ?string $tmsTemplateUrl = null;
    /** @var Bounds */
    protected ?Bounds $bounds = null;
    protected $objects = array('bounds' => '\\Arimac\\Sigfox\\Definition\\Bounds');
    /**
     * @param string $baseImgUrl The tiles base image url
     */
    function setBaseImgUrl(?string $baseImgUrl)
    {
        $this->baseImgUrl = $baseImgUrl;
    }
    /**
     * @return string The tiles base image url
     */
    function getBaseImgUrl() : ?string
    {
        return $this->baseImgUrl;
    }
    /**
     * @param string $tmsTemplateUrl The TMS template url
     */
    function setTmsTemplateUrl(?string $tmsTemplateUrl)
    {
        $this->tmsTemplateUrl = $tmsTemplateUrl;
    }
    /**
     * @return string The TMS template url
     */
    function getTmsTemplateUrl() : ?string
    {
        return $this->tmsTemplateUrl;
    }
    /**
     * @param Bounds bounds
     */
    function setBounds(?Bounds $bounds)
    {
        $this->bounds = $bounds;
    }
    /**
     * @return Bounds bounds
     */
    function getBounds() : ?Bounds
    {
        return $this->bounds;
    }
}