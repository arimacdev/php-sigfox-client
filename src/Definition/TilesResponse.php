<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    /**
     * @var Bounds
     */
    protected ?Bounds $bounds = null;
    /**
     * Setter for baseImgUrl
     *
     * @param string $baseImgUrl The tiles base image url
     *
     * @return self To use in method chains
     */
    public function setBaseImgUrl(?string $baseImgUrl) : self
    {
        $this->baseImgUrl = $baseImgUrl;
        return $this;
    }
    /**
     * Getter for baseImgUrl
     *
     * @return string The tiles base image url
     */
    public function getBaseImgUrl() : ?string
    {
        return $this->baseImgUrl;
    }
    /**
     * Setter for tmsTemplateUrl
     *
     * @param string $tmsTemplateUrl The TMS template url
     *
     * @return self To use in method chains
     */
    public function setTmsTemplateUrl(?string $tmsTemplateUrl) : self
    {
        $this->tmsTemplateUrl = $tmsTemplateUrl;
        return $this;
    }
    /**
     * Getter for tmsTemplateUrl
     *
     * @return string The TMS template url
     */
    public function getTmsTemplateUrl() : ?string
    {
        return $this->tmsTemplateUrl;
    }
    /**
     * Setter for bounds
     *
     * @param Bounds $bounds
     *
     * @return self To use in method chains
     */
    public function setBounds(?Bounds $bounds) : self
    {
        $this->bounds = $bounds;
        return $this;
    }
    /**
     * Getter for bounds
     *
     * @return Bounds
     */
    public function getBounds() : ?Bounds
    {
        return $this->bounds;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('baseImgUrl' => new PrimitiveSerializer('string'), 'tmsTemplateUrl' => new PrimitiveSerializer('string'), 'bounds' => new ClassSerializer(Bounds::class));
    }
}