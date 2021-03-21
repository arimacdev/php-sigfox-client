<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CallbackMedium;
use Arimac\Sigfox\Definition;
class ErrorMessages extends Definition
{
    /**
     * Device identifier
     *
     * @var string
     */
    protected ?string $deviceId = null;
    /**
     * Device type identifier
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * Timestamp of the message (posix format)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * Data message
     *
     * @var string
     */
    protected ?string $data = null;
    /**
     * The SNR of the messages received by the network so far.
     *
     * @var string
     */
    protected ?string $snr = null;
    /**
     * Contains the callback response status.
     *
     * @var string
     */
    protected ?string $status = null;
    /**
     * Contains additional information on the response.
     *
     * @var string
     */
    protected ?string $message = null;
    /** @var CallbackMedium */
    protected ?CallbackMedium $callback = null;
    /**
     * All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     *
     * @var array
     */
    protected ?array $parameters = null;
    protected $objects = array('callback' => '\\Arimac\\Sigfox\\Definition\\CallbackMedium');
    /**
     * @param string $deviceId Device identifier
     */
    function setDeviceId(?string $deviceId)
    {
        $this->deviceId = $deviceId;
    }
    /**
     * @return string Device identifier
     */
    function getDeviceId() : ?string
    {
        return $this->deviceId;
    }
    /**
     * @param string $deviceTypeId Device type identifier
     */
    function setDeviceTypeId(?string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
    }
    /**
     * @return string Device type identifier
     */
    function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
    }
    /**
     * @param int $time Timestamp of the message (posix format)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int Timestamp of the message (posix format)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @param string $data Data message
     */
    function setData(?string $data)
    {
        $this->data = $data;
    }
    /**
     * @return string Data message
     */
    function getData() : ?string
    {
        return $this->data;
    }
    /**
     * @param string $snr The SNR of the messages received by the network so far.
     */
    function setSnr(?string $snr)
    {
        $this->snr = $snr;
    }
    /**
     * @return string The SNR of the messages received by the network so far.
     */
    function getSnr() : ?string
    {
        return $this->snr;
    }
    /**
     * @param string $status Contains the callback response status.
     */
    function setStatus(?string $status)
    {
        $this->status = $status;
    }
    /**
     * @return string Contains the callback response status.
     */
    function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * @param string $message Contains additional information on the response.
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string Contains additional information on the response.
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @param CallbackMedium callback
     */
    function setCallback(?CallbackMedium $callback)
    {
        $this->callback = $callback;
    }
    /**
     * @return CallbackMedium callback
     */
    function getCallback() : ?CallbackMedium
    {
        return $this->callback;
    }
    /**
     * @param array $parameters All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     */
    function setParameters(?array $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     */
    function getParameters() : ?array
    {
        return $this->parameters;
    }
}