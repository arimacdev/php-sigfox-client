<?php

namespace Arimac\Sigfox\Repository;

class TilesMonarch
{
    /**
     * Retrieve the information needed to display Sigfox Monarch service coverage.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', '/tiles/monarch', null, 'int');
    }
    /**
     * @return TilesMonarchKmz
     */
    public function kmz() : TilesMonarchKmz
    {
        return new TilesMonarchKmz();
    }
}