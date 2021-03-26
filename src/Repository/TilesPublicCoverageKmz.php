<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesPublicCoverageKmzTileskmz;
class TilesPublicCoverageKmz
{
    /**
     * @return TilesPublicCoverageKmzTileskmz
     */
    public function tileskmz() : TilesPublicCoverageKmzTileskmz
    {
        return new TilesPublicCoverageKmzTileskmz();
    }
}