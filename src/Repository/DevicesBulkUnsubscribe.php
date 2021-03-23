<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkUnsubscribeJobId;
class DevicesBulkUnsubscribe
{
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkUnsubscribeJobId
     */
    public function find(string $jobId) : DevicesBulkUnsubscribeJobId
    {
        return new DevicesBulkUnsubscribeJobId($jobId);
    }
}