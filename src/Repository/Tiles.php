<?php

namespace Arimac\Sigfox\Repository;

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