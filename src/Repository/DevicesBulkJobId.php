<?php

namespace Arimac\Sigfox\Repository;

class DevicesBulkJobId
{
    /**
     * The job identifier (hexadecimal format)
     */
    protected string $jobId;
    /**
     * Creating the repository
     *
     * @param string $jobId The job identifier (hexadecimal format)
     */
    function __construct(string $jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * Retrieve the status of an asynchronous job for devices.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/bulk/{jobId}', $request, 'int');
    }
    /**
     * Transfer multiple devices to another device type with asynchronous job
     *
     * @param int $request
     * @return int
     */
    function transfer(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/transfer', $request, 'int');
    }
    /**
     * Replace multiple devices (moving tokens from one device to another) with synchronous job
     *
     * @param int $request
     * @return int
     */
    function replace(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/replace', $request, 'int');
    }
    /**
     * Restart multiple devices with asynchronous job.
     *
     * @param int $request
     * @return int
     */
    function restart(int $request) : int
    {
        return $this->client->request('post', '/devices/bulk/restart', $request, 'int');
    }
}