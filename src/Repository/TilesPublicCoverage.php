<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesPublicCoverageKmz;
class TilesPublicCoverage
{
    /**
     * @return TilesPublicCoverageKmz
     */
    public function kmz() : TilesPublicCoverageKmz
    {
        return new TilesPublicCoverageKmz();
    }
}