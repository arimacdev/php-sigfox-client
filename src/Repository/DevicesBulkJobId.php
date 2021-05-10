<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesBulkTransfer;
use Arimac\Sigfox\Request\DevicesBulkReplace;
use Arimac\Sigfox\Request\DevicesBulkRestart;
class DevicesBulkJobId
{
    /**
     * The job identifier (hexadecimal format)
     */
    protected ?string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identifier (hexadecimal format)
     */
    public function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the status of an asynchronous job for devices.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/bulk/{jobId}', $this->jobId), null, 'int');
    }
    /**
     * Transfer multiple devices to another device type with asynchronous job
     * 
     */
    public function transfer(DevicesBulkTransfer $request) : int
    {
        return $this->client->request('post', $this->bindUrlParams('/devices/bulk/transfer', $this->jobId), $request, 'int');
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     * 
     */
    public function replace(DevicesBulkReplace $request) : int
    {
        return $this->client->request('post', $this->bindUrlParams('/devices/bulk/replace', $this->jobId), $request, 'int');
    }
    /**
     * Restart multiple devices with asynchronous job.
     * 
     */
    public function restart(DevicesBulkRestart $request) : int
    {
        return $this->client->request('post', $this->bindUrlParams('/devices/bulk/restart', $this->jobId), $request, 'int');
    }
}