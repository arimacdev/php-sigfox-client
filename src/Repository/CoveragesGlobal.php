<?php

namespace Arimac\Sigfox\Repository;

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