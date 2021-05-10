<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\TilesMonarchKmzJobIdTileskmzGetCoverage;
class TilesMonarchKmzJobIdTileskmz
{
    /**
     * The job's identifier (hexademical format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job's identifier (hexademical format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve Sigfox Monarch coverage kmz from a job
     * 
     */
    public function getCoverage(TilesMonarchKmzJobIdTileskmzGetCoverage $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/tiles/monarch/kmz/{jobId}/tiles.kmz', $this->jobId), $request, 'int');
    }
}