<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob;
/**
 * Replace multiple devices (moving tokens from one device to another) with synchronous job
 * 
 */
class DevicesBulkReplace extends Definition
{
    /**
     * Pairs of source and target devices
     *
     * @var AsynchronousDeviceReplacementJob
     */
    protected ?AsynchronousDeviceReplacementJob $devicePairs = null;
    protected $serialize = array('devicePairs' => AsynchronousDeviceReplacementJob::class);
    protected $body = array('devicePairs');
    /**
     * Setter for devicePairs
     *
     * @param AsynchronousDeviceReplacementJob $devicePairs Pairs of source and target devices
     *
     * @return self To use in method chains
     */
    public function setDevicePairs(?AsynchronousDeviceReplacementJob $devicePairs) : self
    {
        $this->devicePairs = $devicePairs;
        return $this;
    }
}