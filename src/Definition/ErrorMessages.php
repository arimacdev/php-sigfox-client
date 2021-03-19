<?php

namespace Arimac\Sigfox\Definition;

class ErrorMessages
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
     * Timestamp of the message (posix format)
     */
    protected int $time;
    /**
     * Data message
     */
    protected string $data;
    /**
     * The SNR of the messages received by the network so far.
     */
    protected string $snr;
    /**
     * Contains the callback response status.
     */
    protected string $status;
    /**
     * Contains additional information on the response.
     */
    protected string $message;
    /**
     * All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     */
    protected object $parameters;
}