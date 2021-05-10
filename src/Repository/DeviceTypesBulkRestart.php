<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesBulkRestart
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job's identidier (hexademical format)
     *
     * @return DeviceTypesBulkRestartJobId
     */
    public function find(string $jobId) : DeviceTypesBulkRestartJobId
    {
        return new DeviceTypesBulkRestartJobId($jobId);
    }
}