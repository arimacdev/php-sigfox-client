<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\TilesResponse;
use Arimac\Sigfox\Request\TilesPublicCoverageKmzTitles;
class TilesPublicCoverage
{
    /**
     * Retrieve the information needed to display Sigfox public coverage.
     * 
     */
    public function get() : TilesResponse
    {
        return $this->client->request('get', '/tiles/public-coverage', null, TilesResponse::class);
    }
    /**
     * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not require
     * a previous calculation
     * 
     */
    public function kmzTitles(TilesPublicCoverageKmzTitles $request)
    {
        return $this->client->request('get', '/tiles/public-coverage/kmz/tiles.kmz', $request);
    }
}