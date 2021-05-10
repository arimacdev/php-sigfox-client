<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
class DevicesBulk
{
    /**
     * Create multiple new devices with asynchronous job
     * 
     */
    public function create(DevicesBulkCreate $request) : int
    {
        return $this->client->request('post', '/devices/bulk', $request, 'int');
    }
    /**
     * Update or edit multiple devices with asynchronous job.
     * 
     */
    public function update(DevicesBulkUpdate $request) : int
    {
        return $this->client->request('put', '/devices/bulk', $request, 'int');
    }
    /**
     * Find by jobId
     *
     * @param string $jobId The job identifier (hexadecimal format)
     *
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