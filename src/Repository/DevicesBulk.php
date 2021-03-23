<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkJobId;
class DevicesBulk
{
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkJobId
     */
    public function find(string $jobId) : DevicesBulkJobId
    {
        return new DevicesBulkJobId($jobId);
    }
}