<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesMonarchKmz;
class TilesMonarch
{
    /**
     * @return TilesMonarchKmz
     */
    public function kmz() : TilesMonarchKmz
    {
        return new TilesMonarchKmz();
    }
}