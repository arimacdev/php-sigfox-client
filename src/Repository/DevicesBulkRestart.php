<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkRestart
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkRestartJobId
     */
    public function find(string $jobId) : DevicesBulkRestartJobId
    {
        return new DevicesBulkRestartJobId($jobId);
    }
}