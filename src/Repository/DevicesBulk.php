<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkJobId;
use Arimac\Sigfox\Repository\DevicesBulkTransfer;
use Arimac\Sigfox\Repository\DevicesBulkReplace;
use Arimac\Sigfox\Repository\DevicesBulkRestart;
use Arimac\Sigfox\Repository\DevicesBulkSuspend;
use Arimac\Sigfox\Repository\DevicesBulkResume;
use Arimac\Sigfox\Repository\DevicesBulkUnsubscribe;
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
    /**
     * @return DevicesBulkTransfer
     */
    public function transfer() : DevicesBulkTransfer
    {
        return new DevicesBulkTransfer();
    }
    /**
     * @return DevicesBulkReplace
     */
    public function replace() : DevicesBulkReplace
    {
        return new DevicesBulkReplace();
    }
    /**
     * @return DevicesBulkRestart
     */
    public function restart() : DevicesBulkRestart
    {
        return new DevicesBulkRestart();
    }
    /**
     * @return DevicesBulkSuspend
     */
    public function suspend() : DevicesBulkSuspend
    {
        return new DevicesBulkSuspend();
    }
    /**
     * @return DevicesBulkResume
     */
    public function resume() : DevicesBulkResume
    {
        return new DevicesBulkResume();
    }
    /**
     * @return DevicesBulkUnsubscribe
     */
    public function unsubscribe() : DevicesBulkUnsubscribe
    {
        return new DevicesBulkUnsubscribe();
    }
}