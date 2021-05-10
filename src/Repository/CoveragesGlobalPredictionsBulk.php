<?php

namespace Arimac\Sigfox\Repository;

class CoveragesGlobalPredictionsBulk
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identifier (hexademical format)
     *
     * @return CoveragesGlobalPredictionsBulkJobId
     */
    public function find(string $jobId) : CoveragesGlobalPredictionsBulkJobId
    {
        return new CoveragesGlobalPredictionsBulkJobId($jobId);
    }
}