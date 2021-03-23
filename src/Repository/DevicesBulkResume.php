<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkResumeJobId;
class DevicesBulkResume
{
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkResumeJobId
     */
    public function find(string $jobId) : DevicesBulkResumeJobId
    {
        return new DevicesBulkResumeJobId($jobId);
    }
}