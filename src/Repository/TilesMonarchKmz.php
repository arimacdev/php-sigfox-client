<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\TilesMonarchKmzStartAsync;
use Arimac\Sigfox\Response\Generated\TilesMonarchKmzStartAsyncResponse;
class TilesMonarchKmz
{
    /**
     * Starting the computation of Sigfox Monarch coverage view for a specific coverage mode. A new computation starts if
     * no other computation, run in the last 24 hours, is available. Otherwise, the existing jobId is returned.
     * 
     */
    public function startAsync(TilesMonarchKmzStartAsync $request) : TilesMonarchKmzStartAsyncResponse
    {
        return $this->client->request('post', '/tiles/monarch/kmz', $request, TilesMonarchKmzStartAsyncResponse::class);
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identifier (hexademical format)
     *
     * @return TilesMonarchKmzJobId
     */
    public function find(string $jobId) : TilesMonarchKmzJobId
    {
        return new TilesMonarchKmzJobId($jobId);
    }
}