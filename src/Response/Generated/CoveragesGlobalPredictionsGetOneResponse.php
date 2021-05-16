<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class CoveragesGlobalPredictionsGetOneResponse extends Definition
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
     * @param bool $locationCovered True, if the requested location is considered covered.
     *
     * @return self To use in method chains
     */
    public function setLocationCovered(?bool $locationCovered) : self
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
     * @param int[] $margins Margins
     *
     * @return self To use in method chains
     */
    public function setMargins(?array $margins) : self
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
     */
    public function getSerializeMetaData() : array
    {
        return array('locationCovered' => new PrimitiveSerializer(self::class, 'locationCovered', 'bool'), 'margins' => new ArraySerializer(self::class, 'margins', new PrimitiveSerializer(self::class, 'margins', 'int')));
    }
}