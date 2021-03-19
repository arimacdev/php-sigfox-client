<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CallbackMedium;
use Arimac\Sigfox\Definition\object;
class ErrorMessages
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
     * Timestamp of the message (posix format)
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
     * The SNR of the messages received by the network so far.
     *
     * @var string
     */
    protected string $snr;
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
     * All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     *
     * @var object
     */
    protected object $parameters;
}