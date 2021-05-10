<?php

namespace Arimac\Sigfox\Repository;

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
    public function get() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/tiles/monarch/kmz/{jobId}', $this->jobId), null, 'int');
    }
    /**
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->jobId);
    }
}