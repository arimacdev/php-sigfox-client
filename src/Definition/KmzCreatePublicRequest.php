<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class KmzCreatePublicRequest extends Definition
{
    /**
     * The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered by default.
     *
     * @var string
     */
    protected ?string $coverageMode = null;
    /**
     * @param string $coverageMode The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered by default.
     */
    function setCoverageMode(?string $coverageMode)
    {
        $this->coverageMode = $coverageMode;
    }
    /**
     * @return string The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered by default.
     */
    function getCoverageMode() : ?string
    {
        return $this->coverageMode;
    }
}