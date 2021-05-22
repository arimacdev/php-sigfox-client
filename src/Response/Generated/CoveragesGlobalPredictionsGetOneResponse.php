<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class CoveragesGlobalPredictionsGetOneResponse extends Model
{
    /**
     * True, if the requested location is considered covered.
     *
     * @var bool
     */
    protected ?bool $locationCovered = null;
    /**
     * Margins
     *
     * @var int[]
     */
    protected ?array $margins = null;
    /**
     * Setter for locationCovered
     *
     * @internal
     *
     * @param bool $locationCovered True, if the requested location is considered covered.
     *
     * @return static To use in method chains
     */
    public function setLocationCovered(?bool $locationCovered)
    {
        $this->locationCovered = $locationCovered;
        return $this;
    }
    /**
     * Getter for locationCovered
     *
     * @return bool True, if the requested location is considered covered.
     */
    public function getLocationCovered() : ?bool
    {
        return $this->locationCovered;
    }
    /**
     * Setter for margins
     *
     * @internal
     *
     * @param int[] $margins Margins
     *
     * @return static To use in method chains
     */
    public function setMargins(?array $margins)
    {
        $this->margins = $margins;
        return $this;
    }
    /**
     * Getter for margins
     *
     * @return int[] Margins
     */
    public function getMargins() : ?array
    {
        return $this->margins;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('locationCovered' => new PrimitiveSerializer('bool'), 'margins' => new ArraySerializer(new PrimitiveSerializer('int')));
        return $serializers;
    }
}