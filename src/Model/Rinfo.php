<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class Rinfo extends Model
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
     * @var double
     */
    protected ?float $lat = null;
    /**
     * The longitude of the base station that has received the message.
     *
     * @var double
     */
    protected ?float $lng = null;
    /**
     * the delay (in second) between sending and receiving the message, may not be present.
     *
     * @var double
     */
    protected ?float $delay = null;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var double
     */
    protected ?float $snr = null;
    /**
     * the best signal of all repetitions for this base station coming from repeaters
     *
     * @var double
     */
    protected ?float $snrRepeaters = null;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var double
     */
    protected ?float $freq = null;
    /**
     * the frequency at which the message has been received (in Hz) form repeaters
     *
     * @var double
     */
    protected ?float $freqRepeaters = null;
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
    public function getBaseStation() : ?MinBaseStationWithType
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
    public function getRssi() : ?int
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
    public function getRssiRepeaters() : ?int
    {
        return $this->rssiRepeaters;
    }
    /**
     * Setter for lat
     *
     * @param double $lat The latitude of the base station that has received the message.
     *
     * @return self To use in method chains
     */
    public function setLat(?float $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Getter for lat
     *
     * @return double The latitude of the base station that has received the message.
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Setter for lng
     *
     * @param double $lng The longitude of the base station that has received the message.
     *
     * @return self To use in method chains
     */
    public function setLng(?float $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
    /**
     * Getter for lng
     *
     * @return double The longitude of the base station that has received the message.
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * Setter for delay
     *
     * @param double $delay the delay (in second) between sending and receiving the message, may not be present.
     *
     * @return self To use in method chains
     */
    public function setDelay(?float $delay) : self
    {
        $this->delay = $delay;
        return $this;
    }
    /**
     * Getter for delay
     *
     * @return double the delay (in second) between sending and receiving the message, may not be present.
     */
    public function getDelay() : ?float
    {
        return $this->delay;
    }
    /**
     * Setter for snr
     *
     * @param double $snr the best signal of all repetitions for this base station
     *
     * @return self To use in method chains
     */
    public function setSnr(?float $snr) : self
    {
        $this->snr = $snr;
        return $this;
    }
    /**
     * Getter for snr
     *
     * @return double the best signal of all repetitions for this base station
     */
    public function getSnr() : ?float
    {
        return $this->snr;
    }
    /**
     * Setter for snrRepeaters
     *
     * @param double $snrRepeaters the best signal of all repetitions for this base station coming from repeaters
     *
     * @return self To use in method chains
     */
    public function setSnrRepeaters(?float $snrRepeaters) : self
    {
        $this->snrRepeaters = $snrRepeaters;
        return $this;
    }
    /**
     * Getter for snrRepeaters
     *
     * @return double the best signal of all repetitions for this base station coming from repeaters
     */
    public function getSnrRepeaters() : ?float
    {
        return $this->snrRepeaters;
    }
    /**
     * Setter for freq
     *
     * @param double $freq the frequency at which the message has been received (in Hz)
     *
     * @return self To use in method chains
     */
    public function setFreq(?float $freq) : self
    {
        $this->freq = $freq;
        return $this;
    }
    /**
     * Getter for freq
     *
     * @return double the frequency at which the message has been received (in Hz)
     */
    public function getFreq() : ?float
    {
        return $this->freq;
    }
    /**
     * Setter for freqRepeaters
     *
     * @param double $freqRepeaters the frequency at which the message has been received (in Hz) form repeaters
     *
     * @return self To use in method chains
     */
    public function setFreqRepeaters(?float $freqRepeaters) : self
    {
        $this->freqRepeaters = $freqRepeaters;
        return $this;
    }
    /**
     * Getter for freqRepeaters
     *
     * @return double the frequency at which the message has been received (in Hz) form repeaters
     */
    public function getFreqRepeaters() : ?float
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
    public function getRep() : ?int
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
    public function getRepetitions() : ?array
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
    public function getCbStatus() : ?array
    {
        return $this->cbStatus;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('baseStation' => new ClassSerializer(MinBaseStationWithType::class), 'rssi' => new PrimitiveSerializer('int'), 'rssiRepeaters' => new PrimitiveSerializer('int'), 'lat' => new PrimitiveSerializer('double'), 'lng' => new PrimitiveSerializer('double'), 'delay' => new PrimitiveSerializer('double'), 'snr' => new PrimitiveSerializer('double'), 'snrRepeaters' => new PrimitiveSerializer('double'), 'freq' => new PrimitiveSerializer('double'), 'freqRepeaters' => new PrimitiveSerializer('double'), 'rep' => new PrimitiveSerializer('int'), 'repetitions' => new ArraySerializer(new ClassSerializer(Repetition::class)), 'cbStatus' => new ArraySerializer(new ClassSerializer(CbStatus::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('baseStation' => array(new Child()), 'repetitions' => array(new ChildSet()), 'cbStatus' => array(new ChildSet()));
        return $rules;
    }
}