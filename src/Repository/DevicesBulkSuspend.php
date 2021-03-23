<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkSuspendJobId;
class DevicesBulkSuspend
{
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkSuspendJobId
     */
    public function find(string $jobId) : DevicesBulkSuspendJobId
    {
        return new DevicesBulkSuspendJobId($jobId);
    }
}