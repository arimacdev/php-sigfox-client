<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class KmzCreatePublicRequest extends Definition
{
    /**
     * The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3
     * are for product class (1U, 2U and 3U), 0U is considered by default.
     *
     * @var string
     */
    protected ?string $coverageMode = null;
    /**
     * @internal
     */
    protected array $validations = array('coverageMode' => array('in:OVERLAP_INDOOR,OVERLAP_OUTDOOR,OVERLAP_INDOOR_U1,OVERLAP_OUTDOOR_U1,OVERLAP_INDOOR_U2,OVERLAP_OUTDOOR_U2,OVERLAP_INDOOR_U3,OVERLAP_OUTDOOR_U3', 'nullable'));
    /**
     * Setter for coverageMode
     *
     * @param string $coverageMode The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for
     *                             20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered
     *                             by default.
     *                             
     *
     * @return self To use in method chains
     */
    public function setCoverageMode(?string $coverageMode) : self
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
        return array('coverageMode' => new PrimitiveSerializer('string'));
    }
}