<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\Repetition;
use Arimac\Sigfox\Definition\CbStatus;
class Rinfo
{
    /**
     * Name and Id of the base station which has received the message.
     *
     * @var object
     */
    protected object $baseStation;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected int $rssi;
    /**
     * Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected int $rssiRepeaters;
    /**
     * The latitude of the base station that has received the message.
     *
     * @var int
     */
    protected int $lat;
    /**
     * The longitude of the base station that has received the message.
     *
     * @var int
     */
    protected int $lng;
    /**
     * the delay (in second) between sending and receiving the message, may not be present.
     *
     * @var int
     */
    protected int $delay;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var int
     */
    protected int $snr;
    /**
     * the best signal of all repetitions for this base station coming from repeaters
     *
     * @var int
     */
    protected int $snrRepeaters;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var int
     */
    protected int $freq;
    /**
     * the frequency at which the message has been received (in Hz) form repeaters
     *
     * @var int
     */
    protected int $freqRepeaters;
    /**
     * number of repetitions sent by the base station
     *
     * @var int
     */
    protected int $rep;
    /**
     * detail of the repetitions
     *
     * @var Repetition[]
     */
    protected array $repetitions;
    /**
     * list of callback status for this reception
     *
     * @var CbStatus[]
     */
    protected array $cbStatus;
    /**
     * @param object baseStation Name and Id of the base station which has received the message.
     */
    function setBaseStation(object $baseStation)
    {
        $this->baseStation = $baseStation;
    }
    /**
     * @return object Name and Id of the base station which has received the message.
     */
    function getBaseStation() : object
    {
        return $this->baseStation;
    }
    /**
     * @param int rssi Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    function setRssi(int $rssi)
    {
        $this->rssi = $rssi;
    }
    /**
     * @return int Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    function getRssi() : int
    {
        return $this->rssi;
    }
    /**
     * @param int rssiRepeaters Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     */
    function setRssiRepeaters(int $rssiRepeaters)
    {
        $this->rssiRepeaters = $rssiRepeaters;
    }
    /**
     * @return int Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     */
    function getRssiRepeaters() : int
    {
        return $this->rssiRepeaters;
    }
    /**
     * @param int lat The latitude of the base station that has received the message.
     */
    function setLat(int $lat)
    {
        $this->lat = $lat;
    }
    /**
     * @return int The latitude of the base station that has received the message.
     */
    function getLat() : int
    {
        return $this->lat;
    }
    /**
     * @param int lng The longitude of the base station that has received the message.
     */
    function setLng(int $lng)
    {
        $this->lng = $lng;
    }
    /**
     * @return int The longitude of the base station that has received the message.
     */
    function getLng() : int
    {
        return $this->lng;
    }
    /**
     * @param int delay the delay (in second) between sending and receiving the message, may not be present.
     */
    function setDelay(int $delay)
    {
        $this->delay = $delay;
    }
    /**
     * @return int the delay (in second) between sending and receiving the message, may not be present.
     */
    function getDelay() : int
    {
        return $this->delay;
    }
    /**
     * @param int snr the best signal of all repetitions for this base station
     */
    function setSnr(int $snr)
    {
        $this->snr = $snr;
    }
    /**
     * @return int the best signal of all repetitions for this base station
     */
    function getSnr() : int
    {
        return $this->snr;
    }
    /**
     * @param int snrRepeaters the best signal of all repetitions for this base station coming from repeaters
     */
    function setSnrRepeaters(int $snrRepeaters)
    {
        $this->snrRepeaters = $snrRepeaters;
    }
    /**
     * @return int the best signal of all repetitions for this base station coming from repeaters
     */
    function getSnrRepeaters() : int
    {
        return $this->snrRepeaters;
    }
    /**
     * @param int freq the frequency at which the message has been received (in Hz)
     */
    function setFreq(int $freq)
    {
        $this->freq = $freq;
    }
    /**
     * @return int the frequency at which the message has been received (in Hz)
     */
    function getFreq() : int
    {
        return $this->freq;
    }
    /**
     * @param int freqRepeaters the frequency at which the message has been received (in Hz) form repeaters
     */
    function setFreqRepeaters(int $freqRepeaters)
    {
        $this->freqRepeaters = $freqRepeaters;
    }
    /**
     * @return int the frequency at which the message has been received (in Hz) form repeaters
     */
    function getFreqRepeaters() : int
    {
        return $this->freqRepeaters;
    }
    /**
     * @param int rep number of repetitions sent by the base station
     */
    function setRep(int $rep)
    {
        $this->rep = $rep;
    }
    /**
     * @return int number of repetitions sent by the base station
     */
    function getRep() : int
    {
        return $this->rep;
    }
    /**
     * @param Repetition[] repetitions detail of the repetitions
     */
    function setRepetitions(array $repetitions)
    {
        $this->repetitions = $repetitions;
    }
    /**
     * @return Repetition[] detail of the repetitions
     */
    function getRepetitions() : array
    {
        return $this->repetitions;
    }
    /**
     * @param CbStatus[] cbStatus list of callback status for this reception
     */
    function setCbStatus(array $cbStatus)
    {
        $this->cbStatus = $cbStatus;
    }
    /**
     * @return CbStatus[] list of callback status for this reception
     */
    function getCbStatus() : array
    {
        return $this->cbStatus;
    }
}