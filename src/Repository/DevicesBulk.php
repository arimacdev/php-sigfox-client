<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Response\Generated\DevicesBulkCreateResponse;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
use Arimac\Sigfox\Response\Generated\DevicesBulkUpdateResponse;
use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Response\Generated\DevicesBulkTransferResponse;
use Arimac\Sigfox\Request\DevicesBulkReplace;
use Arimac\Sigfox\Definition\ReplaceResponse;
use Arimac\Sigfox\Request\DevicesBulkRestart;
use Arimac\Sigfox\Response\Generated\DevicesBulkRestartResponse;
use Arimac\Sigfox\Request\DevicesBulkSuspend;
use Arimac\Sigfox\Response\Generated\DevicesBulkSuspendResponse;
use Arimac\Sigfox\Request\DevicesBulkResume;
use Arimac\Sigfox\Response\Generated\DevicesBulkResumeResponse;
use Arimac\Sigfox\Request\DevicesBulkUnsubscribe;
use Arimac\Sigfox\Response\Generated\DevicesBulkUnsubscribeResponse;
class DevicesBulk
{
    /**
     * Create multiple new devices with asynchronous job
     * 
     */
    public function create(DevicesBulkCreate $request) : DevicesBulkCreateResponse
    {
        return $this->client->request('post', '/devices/bulk', $request, DevicesBulkCreateResponse::class);
    }
    /**
     * Update or edit multiple devices with asynchronous job.
     * 
     */
    public function update(DevicesBulkUpdate $request) : DevicesBulkUpdateResponse
    {
        return $this->client->request('put', '/devices/bulk', $request, DevicesBulkUpdateResponse::class);
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
    public function transfer(DevicesBulkTransfer $request) : DevicesBulkTransferResponse
    {
        return $this->client->request('post', '/devices/bulk/transfer', $request, DevicesBulkTransferResponse::class);
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     * 
     */
    public function replace(DevicesBulkReplace $request) : ReplaceResponse
    {
        return $this->client->request('post', '/devices/bulk/replace', $request, ReplaceResponse::class);
    }
    /**
     * Restart multiple devices with asynchronous job.
     * 
     */
    public function restart(DevicesBulkRestart $request) : DevicesBulkRestartResponse
    {
        return $this->client->request('post', '/devices/bulk/restart', $request, DevicesBulkRestartResponse::class);
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
    public function suspend(DevicesBulkSuspend $request) : DevicesBulkSuspendResponse
    {
        return $this->client->request('post', '/devices/bulk/suspend', $request, DevicesBulkSuspendResponse::class);
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
    public function resume(DevicesBulkResume $request) : DevicesBulkResumeResponse
    {
        return $this->client->request('post', '/devices/bulk/resume', $request, DevicesBulkResumeResponse::class);
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
    public function unsubscribe(DevicesBulkUnsubscribe $request) : DevicesBulkUnsubscribeResponse
    {
        return $this->client->request('post', '/devices/bulk/unsubscribe', $request, DevicesBulkUnsubscribeResponse::class);
    }
    /**
     * @return DevicesBulkUnsubscribe
     */
    public function unsubscribe() : DevicesBulkUnsubscribe
    {
        return new DevicesBulkUnsubscribe();
    }
}