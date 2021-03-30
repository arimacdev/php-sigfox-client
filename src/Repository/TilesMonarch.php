<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesMonarchKmz;
class TilesMonarch
{
    /**
     * Retrieve the information needed to display Sigfox Monarch service coverage.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/tiles/monarch', $request, 'int');
    }
    /**
     * @return TilesMonarchKmz
     */
    public function kmz() : TilesMonarchKmz
    {
        return new TilesMonarchKmz();
    }
}