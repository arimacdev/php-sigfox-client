<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\TilesResponse;
class TilesMonarch
{
    /**
     * Retrieve the information needed to display Sigfox Monarch service coverage.
     * 
     */
    public function get() : TilesResponse
    {
        return $this->client->request('get', '/tiles/monarch', null, TilesResponse::class);
    }
    /**
     * @return TilesMonarchKmz
     */
    public function kmz() : TilesMonarchKmz
    {
        return new TilesMonarchKmz();
    }
}