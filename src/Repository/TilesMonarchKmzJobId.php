<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesMonarchKmzJobIdTileskmz;
class TilesMonarchKmzJobId
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
     * Retrieve Sigfox Monarch coverage kmz computation from asynchronous job status
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/tiles/monarch/kmz/{jobId}', $request, 'int');
    }
    /**
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->jobId);
    }
}