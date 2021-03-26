<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobalPredictions;
class CoveragesGlobal
{
    /**
     * @return CoveragesGlobalPredictions
     */
    public function predictions() : CoveragesGlobalPredictions
    {
        return new CoveragesGlobalPredictions();
    }
}