<?php

namespace Arimac\Sigfox\Repository;

class TilesPublicCoverage
{
    /**
     * Retrieve the information needed to display Sigfox public coverage.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/tiles/public-coverage', $request, 'int');
    }
    /**
     * Retrieve Sigfox public coverage kmz file from a job. The public coverage is always available and does not require a previous calculation
     *
     * @param int $request
     * @return int
     */
    function kmzTitles(int $request) : int
    {
        return $this->client->request('get', '/tiles/public-coverage/kmz/tiles.kmz', $request, 'int');
    }
}