<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinBaseStationWithType;
use Arimac\Sigfox\Definition\Repetition;
use Arimac\Sigfox\Definition\CbStatus;
use Arimac\Sigfox\Definition;
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
     * @var float
     */
    protected ?float $lat = null;
    /**
     * The longitude of the base station that has received the message.
     *
     * @var float
     */
    protected ?float $lng = null;
    /**
     * the delay (in second) between sending and receiving the message, may not be present.
     *
     * @var float
     */
    protected ?float $delay = null;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var float
     */
    protected ?float $snr = null;
    /**
     * the best signal of all repetitions for this base station coming from repeaters
     *
     * @var float
     */
    protected ?float $snrRepeaters = null;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var float
     */
    protected ?float $freq = null;
    /**
     * the frequency at which the message has been received (in Hz) form repeaters
     *
     * @var float
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
    protected $objects = array('baseStation' => '\\Arimac\\Sigfox\\Definition\\MinBaseStationWithType');
    /**
     * @param MinBaseStationWithType $baseStation Name and Id of the base station which has received the message.
     */
    function setBaseStation(?MinBaseStationWithType $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return MinBaseStationWithType Name and Id of the base station which has received the message.
     */
    function getBaseStation() : ?MinBaseStationWithType
    {
        return $this->baseStation;
    }
    /**
     * @param int $rssi Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    function setRssi(?int $rssi)
    {
        $this->rssi = $rssi;
    }
    /**
     * @return int Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    function getRssi() : ?int
    {
        return $this->rssi;
    }
    /**
     * @param int $rssiRepeaters Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     */
    function setRssiRepeaters(?int $rssiRepeaters)
    {
        $this->rssiRepeaters = $rssiRepeaters;
    }
    /**
     * @return int Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     */
    function getRssiRepeaters() : ?int
    {
        return $this->rssiRepeaters;
    }
    /**
     * @param float $lat The latitude of the base station that has received the message.
     */
    function setLat(?float $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return float The latitude of the base station that has received the message.
     */
    function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * @param float $lng The longitude of the base station that has received the message.
     */
    function setLng(?float $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return float The longitude of the base station that has received the message.
     */
    function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * @param float $delay the delay (in second) between sending and receiving the message, may not be present.
     */
    function setDelay(?float $delay)
    {
        $this->delay = $delay;
    }
    /**
     * @return float the delay (in second) between sending and receiving the message, may not be present.
     */
    function getDelay() : ?float
    {
        return $this->delay;
    }
    /**
     * @param float $snr the best signal of all repetitions for this base station
     */
    function setSnr(?float $snr)
    {
        $this->snr = $snr;
    }
    /**
     * @return float the best signal of all repetitions for this base station
     */
    function getSnr() : ?float
    {
        return $this->snr;
    }
    /**
     * @param float $snrRepeaters the best signal of all repetitions for this base station coming from repeaters
     */
    function setSnrRepeaters(?float $snrRepeaters)
    {
        $this->snrRepeaters = $snrRepeaters;
    }
    /**
     * @return float the best signal of all repetitions for this base station coming from repeaters
     */
    function getSnrRepeaters() : ?float
    {
        return $this->snrRepeaters;
    }
    /**
     * @param float $freq the frequency at which the message has been received (in Hz)
     */
    function setFreq(?float $freq)
    {
        $this->freq = $freq;
    }
    /**
     * @return float the frequency at which the message has been received (in Hz)
     */
    function getFreq() : ?float
    {
        return $this->freq;
    }
    /**
     * @param float $freqRepeaters the frequency at which the message has been received (in Hz) form repeaters
     */
    function setFreqRepeaters(?float $freqRepeaters)
    {
        $this->freqRepeaters = $freqRepeaters;
    }
    /**
     * @return float the frequency at which the message has been received (in Hz) form repeaters
     */
    function getFreqRepeaters() : ?float
    {
        return $this->freqRepeaters;
    }
    /**
     * @param int $rep number of repetitions sent by the base station
     */
    function setRep(?int $rep)
    {
        $this->rep = $rep;
    }
    /**
     * @return int number of repetitions sent by the base station
     */
    function getRep() : ?int
    {
        return $this->rep;
    }
    /**
     * @param Repetition[] $repetitions detail of the repetitions
     */
    function setRepetitions(?array $repetitions)
    {
        $this->repetitions = $repetitions;
    }
    /**
     * @return Repetition[] detail of the repetitions
     */
    function getRepetitions() : ?array
    {
        return $this->repetitions;
    }
    /**
     * @param CbStatus[] $cbStatus list of callback status for this reception
     */
    function setCbStatus(?array $cbStatus)
    {
        $this->cbStatus = $cbStatus;
    }
    /**
     * @return CbStatus[] list of callback status for this reception
     */
    function getCbStatus() : ?array
    {
        return $this->cbStatus;
    }
}