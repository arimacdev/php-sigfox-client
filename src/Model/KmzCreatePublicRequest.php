<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
class KmzCreatePublicRequest extends Model
{
    /**
     * The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3
     * are for product class (1U, 2U and 3U), 0U is considered by default.
     *
     * @var string
     */
    protected ?string $coverageMode = null;
    /**
     * Setter for coverageMode
     *
     * @param string $coverageMode The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for
     *                             20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered
     *                             by default.
     *                             
     *
     * @return static To use in method chains
     */
    public function setCoverageMode(?string $coverageMode)
    {
        $this->coverageMode = $coverageMode;
        return $this;
    }
    /**
     * Getter for coverageMode
     *
     * @return string The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin
     *                U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered by default.
     *                
     */
    public function getCoverageMode() : ?string
    {
        return $this->coverageMode;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('coverageMode' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('coverageMode' => array(new OneOf(array('OVERLAP_INDOOR', 'OVERLAP_OUTDOOR', 'OVERLAP_INDOOR_U1', 'OVERLAP_OUTDOOR_U1', 'OVERLAP_INDOOR_U2', 'OVERLAP_OUTDOOR_U2', 'OVERLAP_INDOOR_U3', 'OVERLAP_OUTDOOR_U3'))));
        return $rules;
    }
}