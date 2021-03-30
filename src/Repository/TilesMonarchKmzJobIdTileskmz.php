<?php

namespace Arimac\Sigfox\Repository;

class TilesMonarchKmzJobIdTileskmz
{
    /**
     * The job's identifier (hexademical format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identifier (hexademical format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve Sigfox Monarch coverage kmz from a job
     *
     * @param int $request
     * @return int
     */
    function getCoverage(int $request) : int
    {
        return $this->client->request('get', '/tiles/monarch/kmz/{jobId}/tiles.kmz', $request, 'int');
    }
}