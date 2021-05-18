<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
class ErrorMessages extends Model
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
    /**
     * @var CallbackMedium
     */
    protected ?CallbackMedium $callback = null;
    /**
     * All the parameters which have served to build the callback, see callback definitions for an exhaustive list.
     *
     * @var array
     */
    protected ?array $parameters = null;
    /**
     * Setter for deviceId
     *
     * @param string $deviceId Device identifier
     *
     * @return self To use in method chains
     */
    public function setDeviceId(?string $deviceId) : self
    {
        $this->deviceId = $deviceId;
        return $this;
    }
    /**
     * Getter for deviceId
     *
     * @return string Device identifier
     */
    public function getDeviceId() : ?string
    {
        return $this->deviceId;
    }
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId Device type identifier
     *
     * @return self To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId) : self
    {
        $this->deviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Getter for deviceTypeId
     *
     * @return string Device type identifier
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
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
     * @param string $snr The SNR of the messages received by the network so far.
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
     * @return string The SNR of the messages received by the network so far.
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
     * @param CallbackMedium $callback
     *
     * @return self To use in method chains
     */
    public function setCallback(?CallbackMedium $callback) : self
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Getter for callback
     *
     * @return CallbackMedium
     */
    public function getCallback() : ?CallbackMedium
    {
        return $this->callback;
    }
    /**
     * Setter for parameters
     *
     * @param array $parameters All the parameters which have served to build the callback, see callback definitions
     *                          for an exhaustive list.
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
     * @return array All the parameters which have served to build the callback, see callback definitions for an
     *               exhaustive list.
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceId' => new PrimitiveSerializer('string'), 'deviceTypeId' => new PrimitiveSerializer('string'), 'time' => new PrimitiveSerializer('int'), 'data' => new PrimitiveSerializer('string'), 'snr' => new PrimitiveSerializer('string'), 'status' => new PrimitiveSerializer('string'), 'message' => new PrimitiveSerializer('string'), 'callback' => new ClassSerializer(CallbackMedium::class), 'parameters' => new PrimitiveSerializer('array'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('callback' => array(new Child()));
        return $rules;
    }
}