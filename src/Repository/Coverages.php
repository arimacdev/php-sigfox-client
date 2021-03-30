<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobal;
class Coverages
{
    /**
     * @return CoveragesGlobal
     */
    public function global() : CoveragesGlobal
    {
        return new CoveragesGlobal();
    }
}