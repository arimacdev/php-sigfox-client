<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CallbackMedium;
use Arimac\Sigfox\Definition\object;
class DeviceErrorMessages
{
    /**
     * Device identifier
     *
     * @var string
     */
    protected string $deviceId;
    /**
     * Device type identifier
     *
     * @var string
     */
    protected string $deviceTypeId;
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
    /**
     * Data message
     *
     * @var string
     */
    protected string $data;
    /**
     * Contains the callback response status.
     *
     * @var string
     */
    protected string $status;
    /**
     * Contains additional information on the response.
     *
     * @var string
     */
    protected string $message;
    /** @var CallbackMedium */
    protected CallbackMedium $callback;
    /**
     * All the parameters which have served to build the callback, see callback doc for an exhaustive list.
     *
     * @var object
     */
    protected object $parameters;
}