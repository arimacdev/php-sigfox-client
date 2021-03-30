<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesBulkJobId;
use Arimac\Sigfox\Repository\DevicesBulkRestart;
use Arimac\Sigfox\Repository\DevicesBulkSuspend;
use Arimac\Sigfox\Repository\DevicesBulkResume;
use Arimac\Sigfox\Repository\DevicesBulkUnsubscribe;
class DevicesBulk
{
    /**
     * Update or edit multiple devices with asynchronous job.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/devices/bulk', $request, 'int');
    }
    /**
     * Create multiple new devices with asynchronous job
     *
     * @param int $request
     * @return int
     */
    function create(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk', $request, 'int');
    }
    /**
     * @param string $jobId The job identifier (hexadecimal format)
     * @return DevicesBulkJobId
     */
    public function find(string $jobId) : DevicesBulkJobId
    {
        return new DevicesBulkJobId($jobId);
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