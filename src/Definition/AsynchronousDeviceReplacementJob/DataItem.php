<?php

namespace Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob;

use Arimac\Sigfox\Definition;
class DataItem extends Definition
{
    /**
     * The device's identifier to replace (hexadecimal format)
     *
     * @var string
     */
    protected ?string $deviceId = null;
    /**
     * The target device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $targetDeviceId = null;
    /**
     * @param string $deviceId The device's identifier to replace (hexadecimal format)
     */
    function setDeviceId(?string $deviceId)
    {
        $this->deviceId = $deviceId;
    }
    /**
     * @return string The device's identifier to replace (hexadecimal format)
     */
    function getDeviceId() : ?string
    {
        return $this->deviceId;
    }
    /**
     * @param string $targetDeviceId The target device's identifier (hexadecimal format)
     */
    function setTargetDeviceId(?string $targetDeviceId)
    {
        $this->targetDeviceId = $targetDeviceId;
    }
    /**
     * @return string The target device's identifier (hexadecimal format)
     */
    function getTargetDeviceId() : ?string
    {
        return $this->targetDeviceId;
    }
}