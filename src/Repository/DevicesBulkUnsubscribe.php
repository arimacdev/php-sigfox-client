<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkUnsubscribe
{
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
     * @return DevicesBulkUnsubscribeJobId
     */
    public function find(string $jobId) : DevicesBulkUnsubscribeJobId
    {
        return new DevicesBulkUnsubscribeJobId($jobId);
    }
}