<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobalPredictionsBulk;
class CoveragesGlobalPredictions
{
    /**
     * @return CoveragesGlobalPredictionsBulk
     */
    public function bulk() : CoveragesGlobalPredictionsBulk
    {
        return new CoveragesGlobalPredictionsBulk();
    }
}