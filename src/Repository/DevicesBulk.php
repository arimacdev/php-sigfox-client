<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\AsynchronousDeviceCreationJob;
use Arimac\Sigfox\Request\DevicesBulkCreate;
use Arimac\Sigfox\Response\Generated\DevicesBulkCreateResponse;
use Arimac\Sigfox\Request\DevicesBulkUpdate;
use Arimac\Sigfox\Response\Generated\DevicesBulkUpdateResponse;
use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob;
use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Response\Generated\DevicesBulkTransferResponse;
use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob;
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
class DevicesBulk extends Repository
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Create multiple new devices with asynchronous job
     *
     * @param AsynchronousDeviceCreationJob $devices The devices to create
     *
     * @return DevicesBulkCreateResponse
     */
    public function create(AsynchronousDeviceCreationJob $devices) : DevicesBulkCreateResponse
    {
        $request = new DevicesBulkCreate();
        $request->setDevices($devices);
        return $this->client->call('post', '/devices/bulk', $request, DevicesBulkCreateResponse::class);
    }
    /**
     * Update or edit multiple devices with asynchronous job.
     *
     * @param DevicesBulkUpdate $request The query and body parameters to pass
     *
     * @return DevicesBulkUpdateResponse
     */
    public function update(DevicesBulkUpdate $request) : DevicesBulkUpdateResponse
    {
        return $this->client->call('put', '/devices/bulk', $request, DevicesBulkUpdateResponse::class);
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
        return new DevicesBulkJobId($this->client, $jobId);
    }
    /**
     * Transfer multiple devices to another device type with asynchronous job
     *
     * @param AsynchronousDeviceTransferJob $devices The devices to move
     *
     * @return DevicesBulkTransferResponse
     */
    public function transfer(AsynchronousDeviceTransferJob $devices) : DevicesBulkTransferResponse
    {
        $request = new DevicesBulkTransfer();
        $request->setDevices($devices);
        return $this->client->call('post', '/devices/bulk/transfer', $request, DevicesBulkTransferResponse::class);
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     *
     * @param AsynchronousDeviceReplacementJob|undefined $devicePairs Pairs of source and target devices
     *
     * @return ReplaceResponse
     */
    public function replace(?AsynchronousDeviceReplacementJob $devicePairs) : ReplaceResponse
    {
        $request = new DevicesBulkReplace();
        $request->setDevicePairs($devicePairs);
        return $this->client->call('post', '/devices/bulk/replace', $request, ReplaceResponse::class);
    }
    /**
     * Restart multiple devices with asynchronous job.
     *
     * @param DevicesBulkRestart $request The query and body parameters to pass
     *
     * @return DevicesBulkRestartResponse
     */
    public function restart(DevicesBulkRestart $request) : DevicesBulkRestartResponse
    {
        return $this->client->call('post', '/devices/bulk/restart', $request, DevicesBulkRestartResponse::class);
    }
    /**
     * @return DevicesBulkRestart
     */
    public function restart() : DevicesBulkRestart
    {
        return new DevicesBulkRestart($this->client);
    }
    /**
     * Suspend multiple devices with asynchronous job
     *
     * @param DevicesBulkSuspend $request The query and body parameters to pass
     *
     * @return DevicesBulkSuspendResponse
     */
    public function suspend(DevicesBulkSuspend $request) : DevicesBulkSuspendResponse
    {
        return $this->client->call('post', '/devices/bulk/suspend', $request, DevicesBulkSuspendResponse::class);
    }
    /**
     * @return DevicesBulkSuspend
     */
    public function suspend() : DevicesBulkSuspend
    {
        return new DevicesBulkSuspend($this->client);
    }
    /**
     * Resume multiple devices with asynchronous job.
     *
     * @param DevicesBulkResume $request The query and body parameters to pass
     *
     * @return DevicesBulkResumeResponse
     */
    public function resume(DevicesBulkResume $request) : DevicesBulkResumeResponse
    {
        return $this->client->call('post', '/devices/bulk/resume', $request, DevicesBulkResumeResponse::class);
    }
    /**
     * @return DevicesBulkResume
     */
    public function resume() : DevicesBulkResume
    {
        return new DevicesBulkResume($this->client);
    }
    /**
     * Unsubscribe multiple devices with asynchronous job.
     *
     * @param DevicesBulkUnsubscribe $request The query and body parameters to pass
     *
     * @return DevicesBulkUnsubscribeResponse
     */
    public function unsubscribe(DevicesBulkUnsubscribe $request) : DevicesBulkUnsubscribeResponse
    {
        return $this->client->call('post', '/devices/bulk/unsubscribe', $request, DevicesBulkUnsubscribeResponse::class);
    }
    /**
     * @return DevicesBulkUnsubscribe
     */
    public function unsubscribe() : DevicesBulkUnsubscribe
    {
        return new DevicesBulkUnsubscribe($this->client);
    }
}