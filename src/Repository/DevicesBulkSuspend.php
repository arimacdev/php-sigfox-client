<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkSuspend
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkSuspendJobId
     */
    public function find(string $jobId) : DevicesBulkSuspendJobId
    {
        return new DevicesBulkSuspendJobId($jobId);
    }
}