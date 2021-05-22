<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\AsynchronousDeviceReplacementJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
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
    protected ?string $body = 'devicePairs';
    /**
     * Setter for devicePairs
     *
     * @param AsynchronousDeviceReplacementJob $devicePairs Pairs of source and target devices
     *
     * @return static To use in method chains
     */
    public function setDevicePairs(?AsynchronousDeviceReplacementJob $devicePairs)
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
        $serializers = array('devicePairs' => new ClassSerializer(AsynchronousDeviceReplacementJob::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('devicePairs' => array(new Child()));
        return $rules;
    }
}