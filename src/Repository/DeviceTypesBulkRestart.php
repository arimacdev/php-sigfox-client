<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DeviceTypesBulkRestartJobId;
class DeviceTypesBulkRestart
{
    /**
     * @param string $jobId The job's identidier (hexademical format)
     * @return DeviceTypesBulkRestartJobId
     */
    public function find(string $jobId) : DeviceTypesBulkRestartJobId
    {
        return new DeviceTypesBulkRestartJobId($jobId);
    }
}