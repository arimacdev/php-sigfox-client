<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\KmzStatusResponse;
class TilesMonarchKmzJobId
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
     * Retrieve Sigfox Monarch coverage kmz computation from asynchronous job status
     * 
     */
    public function get() : KmzStatusResponse
    {
        return $this->client->request('get', $this->bind('/tiles/monarch/kmz/{jobId}', $this->jobId), null, KmzStatusResponse::class);
    }
    /**
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->jobId);
    }
}