<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\TilesPublicCoverageKmzTitles;
class TilesPublicCoverage
{
    /**
     * Retrieve the information needed to display Sigfox public coverage.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', '/tiles/public-coverage', null, 'int');
    }
    /**
     * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not require
     * a previous calculation
     * 
     */
    public function kmzTitles(TilesPublicCoverageKmzTitles $request) : int
    {
        return $this->client->request('get', '/tiles/public-coverage/kmz/tiles.kmz', $request, 'int');
    }
}