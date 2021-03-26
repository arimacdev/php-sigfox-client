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
     * @return TilesMonarchKmzJobIdTileskmz
     */
    public function tileskmz() : TilesMonarchKmzJobIdTileskmz
    {
        return new TilesMonarchKmzJobIdTileskmz($this->jobId);
    }
}