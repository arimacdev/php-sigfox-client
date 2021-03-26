<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesMonarch;
use Arimac\Sigfox\Repository\TilesPublicCoverage;
class Tiles
{
    /**
     * @return TilesMonarch
     */
    public function monarch() : TilesMonarch
    {
        return new TilesMonarch();
    }
    /**
     * @return TilesPublicCoverage
     */
    public function publicCoverage() : TilesPublicCoverage
    {
        return new TilesPublicCoverage();
    }
}