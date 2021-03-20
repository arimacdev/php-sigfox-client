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
    /**
     * @param string deviceId Device identifier
     */
    function setDeviceId(string $deviceId)
    {
        $this->deviceId = $deviceId;
    }
    /**
     * @return string Device identifier
     */
    function getDeviceId() : string
    {
        return $this->deviceId;
    }
    /**
     * @param string deviceTypeId Device type identifier
     */
    function setDeviceTypeId(string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @return string Device type identifier
     */
    function getDeviceTypeId() : string
    {
        return $this->deviceTypeId;
    }
    /**
     * @param int time Timestamp of the message (posix format)
     */
    function setTime(int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int Timestamp of the message (posix format)
     */
    function getTime() : int
    {
        return $this->time;
    }
    /**
     * @param string data Data message
     */
    function setData(string $data)
    {
        $this->data = $data;
    }
    /**
     * @return string Data message
     */
    function getData() : string
    {
        return $this->data;
    }
    /**
     * @param string snr The SNR of the messages received by the network so far.
     */
    function setSnr(string $snr)
    {
        $this->snr = $snr;
    }
    /**
     * @return string The SNR of the messages received by the network so far.
     */
    function getSnr() : string
    {
        return $this->snr;
    }
    /**
     * @param string status Contains the callback response status.
     */
    function setStatus(string $status)
    {
        $this->status = $status;
    }
    /**
     * @return string Contains the callback response status.
     */
    function getStatus() : string
    {
        return $this->status;
    }
    /**
     * @param string message Contains additional information on the response.
     */
    function setMessage(string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string Contains additional information on the response.
     */
    function getMessage() : string
    {
        return $this->message;
    }
    /**
     * @param CallbackMedium callback
     */
    function setCallback(CallbackMedium $callback)
    {
        $this->callback = $callback;
    }
    /**
     * @return CallbackMedium callback
     */
    function getCallback() : CallbackMedium
    {
        return $this->callback;
    }
    /**
     * @param object parameters All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     */
    function setParameters(object $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return object All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     */
    function getParameters() : object
    {
        return $this->parameters;
    }
}