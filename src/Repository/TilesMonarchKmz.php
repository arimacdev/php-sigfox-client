<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\TilesMonarchKmzJobId;
class TilesMonarchKmz
{
    /**
     * @param string $jobId The job's identifier (hexademical format)
     * @return TilesMonarchKmzJobId
     */
    public function find(string $jobId) : TilesMonarchKmzJobId
    {
        return new TilesMonarchKmzJobId($jobId);
    }
}