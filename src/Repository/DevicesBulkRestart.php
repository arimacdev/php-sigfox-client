<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkRestartJobId;
class DevicesBulkRestart
{
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkRestartJobId
     */
    public function find(string $jobId) : DevicesBulkRestartJobId
    {
        return new DevicesBulkRestartJobId($jobId);
    }
}