<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Replace multiple devices (moving tokens from one device to another) with synchronous job
 */
class DevicesBulkReplace extends Request
{
    /**
     * Pairs of source and target devices
     *
     * @var AsynchronousDeviceReplacementJob
     */
    protected ?AsynchronousDeviceReplacementJob $devicePairs = null;
    /**
     * @internal
     */
    protected array $body = array('devicePairs');
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
    /**
     * Getter for devicePairs
     *
     * @internal
     *
     * @return AsynchronousDeviceReplacementJob Pairs of source and target devices
     */
    public function getDevicePairs() : ?AsynchronousDeviceReplacementJob
    {
        return $this->devicePairs;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('devicePairs' => new ClassSerializer(AsynchronousDeviceReplacementJob::class));
    }
}