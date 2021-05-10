<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkResume
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkResumeJobId
     */
    public function find(string $jobId) : DevicesBulkResumeJobId
    {
        return new DevicesBulkResumeJobId($jobId);
    }
}