<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\CoveragesGlobalPredictionsBulkJobId;
class CoveragesGlobalPredictionsBulk
{
    /**
     * @param string $jobId The job's identifier (hexademical format)
     * @return CoveragesGlobalPredictionsBulkJobId
     */
    public function find(string $jobId) : CoveragesGlobalPredictionsBulkJobId
    {
        return new CoveragesGlobalPredictionsBulkJobId($jobId);
    }
}