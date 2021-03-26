<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobal;
use Arimac\Sigfox\Repository\CoveragesOperators;
class Coverages
{
    /**
     * @return CoveragesGlobal
     */
    public function global() : CoveragesGlobal
    {
        return new CoveragesGlobal();
    }
    /**
     * @return CoveragesOperators
     */
    public function operators() : CoveragesOperators
    {
        return new CoveragesOperators();
    }
}