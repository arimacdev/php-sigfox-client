<?php

namespace Arimac\Sigfox\Definition;

class DeviceErrorMessages
{
    /**
     * Device identifier
     */
    protected string $deviceId;
    /**
     * Device type identifier
     */
    protected string $deviceTypeId;
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    protected int $time;
    /**
     * Data message
     */
    protected string $data;
    /**
     * Contains the callback response status.
     */
    protected string $status;
    /**
     * Contains additional information on the response.
     */
    protected string $message;
    /**
     * All the parameters which have served to build the callback, see callback doc for an exhaustive list.
     */
    protected object $parameters;
}