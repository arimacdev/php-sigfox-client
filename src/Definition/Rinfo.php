<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class Rinfo extends Definition
{
    /**
     * Name and Id of the base station which has received the message.
     *
     * @var MinBaseStationWithType
     */
    protected ?MinBaseStationWithType $baseStation = null;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected ?int $rssi = null;
    /**
     * Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected ?int $rssiRepeaters = null;
    /**
     * The latitude of the base station that has received the message.
     *
     * @var int
     */
    protected ?int $lat = null;
    /**
     * The longitude of the base station that has received the message.
     *
     * @var int
     */
    protected ?int $lng = null;
    /**
     * the delay (in second) between sending and receiving the message, may not be present.
     *
     * @var int
     */
    protected ?int $delay = null;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var int
     */
    protected ?int $snr = null;
    /**
     * the best signal of all repetitions for this base station coming from repeaters
     *
     * @var int
     */
    protected ?int $snrRepeaters = null;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var int
     */
    protected ?int $freq = null;
    /**
     * the frequency at which the message has been received (in Hz) form repeaters
     *
     * @var int
     */
    protected ?int $freqRepeaters = null;
    /**
     * number of repetitions sent by the base station
     *
     * @var int
     */
    protected ?int $rep = null;
    /**
     * detail of the repetitions
     *
     * @var Repetition[]
     */
    protected ?array $repetitions = null;
    /**
     * list of callback status for this reception
     *
     * @var CbStatus[]
     */
    protected ?array $cbStatus = null;
    protected $serialize = array(new ClassSerializer(self::class, 'baseStation', MinBaseStationWithType::class), new PrimitiveSerializer(self::class, 'rssi', 'int'), new PrimitiveSerializer(self::class, 'rssiRepeaters', 'int'), new PrimitiveSerializer(self::class, 'lat', 'int'), new PrimitiveSerializer(self::class, 'lng', 'int'), new PrimitiveSerializer(self::class, 'delay', 'int'), new PrimitiveSerializer(self::class, 'snr', 'int'), new PrimitiveSerializer(self::class, 'snrRepeaters', 'int'), new PrimitiveSerializer(self::class, 'freq', 'int'), new PrimitiveSerializer(self::class, 'freqRepeaters', 'int'), new PrimitiveSerializer(self::class, 'rep', 'int'), new ArraySerializer(self::class, 'repetitions', new ClassSerializer(self::class, 'repetitions', Repetition::class)), new ArraySerializer(self::class, 'cbStatus', new ClassSerializer(self::class, 'cbStatus', CbStatus::class)));
    /**
     * Setter for baseStation
     *
     * @param MinBaseStationWithType $baseStation Name and Id of the base station which has received the message.
     *
     * @return self To use in method chains
     */
    public function setBaseStation(?MinBaseStationWithType $baseStation) : self
    {
        $this->baseStation = $baseStation;
        return $this;
    }
    /**
     * Getter for baseStation
     *
     * @return MinBaseStationWithType Name and Id of the base station which has received the message.
     */
    public function getBaseStation() : MinBaseStationWithType
    {
        return $this->baseStation;
    }
    /**
     * Setter for rssi
     *
     * @param int $rssi Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     *
     * @return self To use in method chains
     */
    public function setRssi(?int $rssi) : self
    {
        $this->rssi = $rssi;
        return $this;
    }
    /**
     * Getter for rssi
     *
     * @return int Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    public function getRssi() : int
    {
        return $this->rssi;
    }
    /**
     * Setter for rssiRepeaters
     *
     * @param int $rssiRepeaters Received Signal Strength Indication from repeaters (in dBm – Float value with two
     *                           maximum fraction digits)
     *
     * @return self To use in method chains
     */
    public function setRssiRepeaters(?int $rssiRepeaters) : self
    {
        $this->rssiRepeaters = $rssiRepeaters;
        return $this;
    }
    /**
     * Getter for rssiRepeaters
     *
     * @return int Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum
     *             fraction digits)
     */
    public function getRssiRepeaters() : int
    {
        return $this->rssiRepeaters;
    }
    /**
     * Setter for lat
     *
     * @param int $lat The latitude of the base station that has received the message.
     *
     * @return self To use in method chains
     */
    public function setLat(?int $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return int The latitude of the base station that has received the message.
     */
    public function getLat() : int
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param int $lng The longitude of the base station that has received the message.
     *
     * @return self To use in method chains
     */
    public function setLng(?int $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return int The longitude of the base station that has received the message.
     */
    public function getLng() : int
    {
        return $this->lng;
    }
    /**
     * Setter for delay
     *
     * @param int $delay the delay (in second) between sending and receiving the message, may not be present.
     *
     * @return self To use in method chains
     */
    public function setDelay(?int $delay) : self
    {
        $this->delay = $delay;
        return $this;
    }
    /**
     * Getter for delay
     *
     * @return int the delay (in second) between sending and receiving the message, may not be present.
     */
    public function getDelay() : int
    {
        return $this->delay;
    }
    /**
     * Setter for snr
     *
     * @param int $snr the best signal of all repetitions for this base station
     *
     * @return self To use in method chains
     */
    public function setSnr(?int $snr) : self
    {
        $this->snr = $snr;
        return $this;
    }
    /**
     * Getter for snr
     *
     * @return int the best signal of all repetitions for this base station
     */
    public function getSnr() : int
    {
        return $this->snr;
    }
    /**
     * Setter for snrRepeaters
     *
     * @param int $snrRepeaters the best signal of all repetitions for this base station coming from repeaters
     *
     * @return self To use in method chains
     */
    public function setSnrRepeaters(?int $snrRepeaters) : self
    {
        $this->snrRepeaters = $snrRepeaters;
        return $this;
    }
    /**
     * Getter for snrRepeaters
     *
     * @return int the best signal of all repetitions for this base station coming from repeaters
     */
    public function getSnrRepeaters() : int
    {
        return $this->snrRepeaters;
    }
    /**
     * Setter for freq
     *
     * @param int $freq the frequency at which the message has been received (in Hz)
     *
     * @return self To use in method chains
     */
    public function setFreq(?int $freq) : self
    {
        $this->freq = $freq;
        return $this;
    }
    /**
     * Getter for freq
     *
     * @return int the frequency at which the message has been received (in Hz)
     */
    public function getFreq() : int
    {
        return $this->freq;
    }
    /**
     * Setter for freqRepeaters
     *
     * @param int $freqRepeaters the frequency at which the message has been received (in Hz) form repeaters
     *
     * @return self To use in method chains
     */
    public function setFreqRepeaters(?int $freqRepeaters) : self
    {
        $this->freqRepeaters = $freqRepeaters;
        return $this;
    }
    /**
     * Getter for freqRepeaters
     *
     * @return int the frequency at which the message has been received (in Hz) form repeaters
     */
    public function getFreqRepeaters() : int
    {
        return $this->freqRepeaters;
    }
    /**
     * Setter for rep
     *
     * @param int $rep number of repetitions sent by the base station
     *
     * @return self To use in method chains
     */
    public function setRep(?int $rep) : self
    {
        $this->rep = $rep;
        return $this;
    }
    /**
     * Getter for rep
     *
     * @return int number of repetitions sent by the base station
     */
    public function getRep() : int
    {
        return $this->rep;
    }
    /**
     * Setter for repetitions
     *
     * @param Repetition[] $repetitions detail of the repetitions
     *
     * @return self To use in method chains
     */
    public function setRepetitions(?array $repetitions) : self
    {
        $this->repetitions = $repetitions;
        return $this;
    }
    /**
     * Getter for repetitions
     *
     * @return Repetition[] detail of the repetitions
     */
    public function getRepetitions() : array
    {
        return $this->repetitions;
    }
    /**
     * Setter for cbStatus
     *
     * @param CbStatus[] $cbStatus list of callback status for this reception
     *
     * @return self To use in method chains
     */
    public function setCbStatus(?array $cbStatus) : self
    {
        $this->cbStatus = $cbStatus;
        return $this;
    }
    /**
     * Getter for cbStatus
     *
     * @return CbStatus[] list of callback status for this reception
     */
    public function getCbStatus() : array
    {
        return $this->cbStatus;
    }
}