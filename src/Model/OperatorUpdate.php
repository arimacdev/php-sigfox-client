<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\Min;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Defines the operator's properties
 */
class OperatorUpdate extends Model
{
    /**
     * Transmitter power (TRP) (in mW)
     *
     * @var int
     */
    protected ?int $transmitterPower = null;
    /**
     * Min dB (in dBm)
     *
     * @var int
     */
    protected ?int $minDb = null;
    /**
     * Max dB (in dBm)
     *
     * @var int
     */
    protected ?int $maxDb = null;
    /**
     * Alert time (in seconds)
     *
     * @var int
     */
    protected ?int $alertTime = null;
    /**
     * Request tracker base Url
     *
     * @var string
     */
    protected ?string $requestTrackerBaseUrl = null;
    /**
     * @var MinStandard
     */
    protected ?MinStandard $telecommunicationStandard = null;
    /**
     * @var MinAntenna
     */
    protected ?MinAntenna $antenna = null;
    /**
     * Setter for transmitterPower
     *
     * @param int $transmitterPower Transmitter power (TRP) (in mW)
     *
     * @return static To use in method chains
     */
    public function setTransmitterPower(?int $transmitterPower)
    {
        $this->transmitterPower = $transmitterPower;
        return $this;
    }
    /**
     * Getter for transmitterPower
     *
     * @return int Transmitter power (TRP) (in mW)
     */
    public function getTransmitterPower() : ?int
    {
        return $this->transmitterPower;
    }
    /**
     * Setter for minDb
     *
     * @param int $minDb Min dB (in dBm)
     *
     * @return static To use in method chains
     */
    public function setMinDb(?int $minDb)
    {
        $this->minDb = $minDb;
        return $this;
    }
    /**
     * Getter for minDb
     *
     * @return int Min dB (in dBm)
     */
    public function getMinDb() : ?int
    {
        return $this->minDb;
    }
    /**
     * Setter for maxDb
     *
     * @param int $maxDb Max dB (in dBm)
     *
     * @return static To use in method chains
     */
    public function setMaxDb(?int $maxDb)
    {
        $this->maxDb = $maxDb;
        return $this;
    }
    /**
     * Getter for maxDb
     *
     * @return int Max dB (in dBm)
     */
    public function getMaxDb() : ?int
    {
        return $this->maxDb;
    }
    /**
     * Setter for alertTime
     *
     * @param int $alertTime Alert time (in seconds)
     *
     * @return static To use in method chains
     */
    public function setAlertTime(?int $alertTime)
    {
        $this->alertTime = $alertTime;
        return $this;
    }
    /**
     * Getter for alertTime
     *
     * @return int Alert time (in seconds)
     */
    public function getAlertTime() : ?int
    {
        return $this->alertTime;
    }
    /**
     * Setter for requestTrackerBaseUrl
     *
     * @param string $requestTrackerBaseUrl Request tracker base Url
     *
     * @return static To use in method chains
     */
    public function setRequestTrackerBaseUrl(?string $requestTrackerBaseUrl)
    {
        $this->requestTrackerBaseUrl = $requestTrackerBaseUrl;
        return $this;
    }
    /**
     * Getter for requestTrackerBaseUrl
     *
     * @return string Request tracker base Url
     */
    public function getRequestTrackerBaseUrl() : ?string
    {
        return $this->requestTrackerBaseUrl;
    }
    /**
     * Setter for telecommunicationStandard
     *
     * @param MinStandard $telecommunicationStandard
     *
     * @return static To use in method chains
     */
    public function setTelecommunicationStandard(?MinStandard $telecommunicationStandard)
    {
        $this->telecommunicationStandard = $telecommunicationStandard;
        return $this;
    }
    /**
     * Getter for telecommunicationStandard
     *
     * @return MinStandard
     */
    public function getTelecommunicationStandard() : ?MinStandard
    {
        return $this->telecommunicationStandard;
    }
    /**
     * Setter for antenna
     *
     * @param MinAntenna $antenna
     *
     * @return static To use in method chains
     */
    public function setAntenna(?MinAntenna $antenna)
    {
        $this->antenna = $antenna;
        return $this;
    }
    /**
     * Getter for antenna
     *
     * @return MinAntenna
     */
    public function getAntenna() : ?MinAntenna
    {
        return $this->antenna;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('transmitterPower' => new PrimitiveSerializer('int'), 'minDb' => new PrimitiveSerializer('int'), 'maxDb' => new PrimitiveSerializer('int'), 'alertTime' => new PrimitiveSerializer('int'), 'requestTrackerBaseUrl' => new PrimitiveSerializer('string'), 'telecommunicationStandard' => new ClassSerializer(MinStandard::class), 'antenna' => new ClassSerializer(MinAntenna::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('transmitterPower' => array(new Max(1000), new Min(0)), 'minDb' => array(new Max(0), new Min(-170)), 'maxDb' => array(new Max(0), new Min(-170)), 'alertTime' => array(new Max(86400), new Min(300)), 'telecommunicationStandard' => array(new Child()), 'antenna' => array(new Child()));
        return $rules;
    }
}