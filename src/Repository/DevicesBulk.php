<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Request\DevicesBulkReplace;
use Arimac\Sigfox\Request\DevicesBulkRestart;
use Arimac\Sigfox\Request\DevicesBulkSuspend;
use Arimac\Sigfox\Request\DevicesBulkResume;
use Arimac\Sigfox\Request\DevicesBulkUnsubscribe;
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
     * Transfer multiple devices to another device type with asynchronous job
     * 
     */
    public function transfer(DevicesBulkTransfer $request) : int
    {
        return $this->client->request('post', '/devices/bulk/transfer', $request, 'int');
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     * 
     */
    public function replace(DevicesBulkReplace $request) : int
    {
        return $this->client->request('post', '/devices/bulk/replace', $request, 'int');
    }
    /**
     * Restart multiple devices with asynchronous job.
     * 
     */
    public function restart(DevicesBulkRestart $request) : int
    {
        return $this->client->request('post', '/devices/bulk/restart', $request, 'int');
    }
    /**
     * @return DevicesBulkRestart
     */
    public function restart() : DevicesBulkRestart
    {
        return new DevicesBulkRestart();
    }
    /**
     * Suspend multiple devices with asynchronous job
     * 
     */
    public function suspend(DevicesBulkSuspend $request) : int
    {
        return $this->client->request('post', '/devices/bulk/suspend', $request, 'int');
    }
    /**
     * @return DevicesBulkSuspend
     */
    public function suspend() : DevicesBulkSuspend
    {
        return new DevicesBulkSuspend();
    }
    /**
     * Resume multiple devices with asynchronous job.
     * 
     */
    public function resume(DevicesBulkResume $request) : int
    {
        return $this->client->request('post', '/devices/bulk/resume', $request, 'int');
    }
    /**
     * @return DevicesBulkResume
     */
    public function resume() : DevicesBulkResume
    {
        return new DevicesBulkResume();
    }
    /**
     * Unsubscribe multiple devices with asynchronous job.
     * 
     */
    public function unsubscribe(DevicesBulkUnsubscribe $request) : int
    {
        return $this->client->request('post', '/devices/bulk/unsubscribe', $request, 'int');
    }
    /**
     * @return DevicesBulkUnsubscribe
     */
    public function unsubscribe() : DevicesBulkUnsubscribe
    {
        return new DevicesBulkUnsubscribe();
    }
}