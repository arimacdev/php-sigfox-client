<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Defines tiles reference to display on web map
 */
class TilesResponse extends Model
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
     * @return static To use in method chains
     */
    public function setBaseImgUrl(?string $baseImgUrl)
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
     * @return static To use in method chains
     */
    public function setTmsTemplateUrl(?string $tmsTemplateUrl)
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
     * @return static To use in method chains
     */
    public function setBounds(?Bounds $bounds)
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
        $serializers = array('baseImgUrl' => new PrimitiveSerializer('string'), 'tmsTemplateUrl' => new PrimitiveSerializer('string'), 'bounds' => new ClassSerializer(Bounds::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('bounds' => array(new Child()));
        return $rules;
    }
}