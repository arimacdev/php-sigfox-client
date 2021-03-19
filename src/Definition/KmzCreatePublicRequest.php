<?php

namespace Arimac\Sigfox\Definition;

class KmzCreatePublicRequest
{
    /**
     * The coverage mode for coverage display.  Outdoor is for 0dB margin and Indoor for 20 dB margin U1, U2 and U3 are for product class (1U, 2U and 3U), 0U is considered by default.
     */
    protected string $coverageMode;
}