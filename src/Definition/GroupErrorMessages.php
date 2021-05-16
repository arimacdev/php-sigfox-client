<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
class GroupErrorMessages extends Definition
{
    /**
     * Device identifier
     *
     * @var string
     */
    protected ?string $device = null;
    /**
     * Url to the device
     *
     * @var string
     */
    protected ?string $deviceUrl = null;
    /**
     * Device type identifier
     *
     * @var string
     */
    protected ?string $deviceType = null;
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
     * The SNR of the messages received by the network so far
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
    /**
     * @var GroupCallbackMedium
     */
    protected ?GroupCallbackMedium $callback = null;
    /**
     * All the parameters which have served to build the callback, see callback doc for an exhaustive list.
     *
     * @var array
     */
    protected ?array $parameters = null;
    /**
     * Setter for device
     *
     * @param string $device Device identifier
     *
     * @return self To use in method chains
     */
    public function setDevice(?string $device) : self
    {
        $this->device = $device;
        return $this;
    }
    /**
     * Getter for device
     *
     * @return string Device identifier
     */
    public function getDevice() : ?string
    {
        return $this->device;
    }
    /**
     * Setter for deviceUrl
     *
     * @param string $deviceUrl Url to the device
     *
     * @return self To use in method chains
     */
    public function setDeviceUrl(?string $deviceUrl) : self
    {
        $this->deviceUrl = $deviceUrl;
        return $this;
    }
    /**
     * Getter for deviceUrl
     *
     * @return string Url to the device
     */
    public function getDeviceUrl() : ?string
    {
        return $this->deviceUrl;
    }
    /**
     * Setter for deviceType
     *
     * @param string $deviceType Device type identifier
     *
     * @return self To use in method chains
     */
    public function setDeviceType(?string $deviceType) : self
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Getter for deviceType
     *
     * @return string Device type identifier
     */
    public function getDeviceType() : ?string
    {
        return $this->deviceType;
    }
    /**
     * Setter for time
     *
     * @param int $time Timestamp of the message (posix format)
     *
     * @return self To use in method chains
     */
    public function setTime(?int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int Timestamp of the message (posix format)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * Setter for data
     *
     * @param string $data Data message
     *
     * @return self To use in method chains
     */
    public function setData(?string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return string Data message
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * Setter for snr
     *
     * @param string $snr The SNR of the messages received by the network so far
     *
     * @return self To use in method chains
     */
    public function setSnr(?string $snr) : self
    {
        $this->snr = $snr;
        return $this;
    }
    /**
     * Getter for snr
     *
     * @return string The SNR of the messages received by the network so far
     */
    public function getSnr() : ?string
    {
        return $this->snr;
    }
    /**
     * Setter for status
     *
     * @param string $status Contains the callback response status.
     *
     * @return self To use in method chains
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return string Contains the callback response status.
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Setter for message
     *
     * @param string $message Contains additional information on the response.
     *
     * @return self To use in method chains
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string Contains additional information on the response.
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Setter for callback
     *
     * @param GroupCallbackMedium $callback
     *
     * @return self To use in method chains
     */
    public function setCallback(?GroupCallbackMedium $callback) : self
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Getter for callback
     *
     * @return GroupCallbackMedium
     */
    public function getCallback() : ?GroupCallbackMedium
    {
        return $this->callback;
    }
    /**
     * Setter for parameters
     *
     * @param array $parameters All the parameters which have served to build the callback, see callback doc for an
     *                          exhaustive list.
     *
     * @return self To use in method chains
     */
    public function setParameters(?array $parameters) : self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Getter for parameters
     *
     * @return array All the parameters which have served to build the callback, see callback doc for an exhaustive
     *               list.
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('device' => new PrimitiveSerializer(self::class, 'device', 'string'), 'deviceUrl' => new PrimitiveSerializer(self::class, 'deviceUrl', 'string'), 'deviceType' => new PrimitiveSerializer(self::class, 'deviceType', 'string'), 'time' => new PrimitiveSerializer(self::class, 'time', 'int'), 'data' => new PrimitiveSerializer(self::class, 'data', 'string'), 'snr' => new PrimitiveSerializer(self::class, 'snr', 'string'), 'status' => new PrimitiveSerializer(self::class, 'status', 'string'), 'message' => new PrimitiveSerializer(self::class, 'message', 'string'), 'callback' => new ClassSerializer(self::class, 'callback', GroupCallbackMedium::class), 'parameters' => new PrimitiveSerializer(self::class, 'parameters', 'array'));
    }
}