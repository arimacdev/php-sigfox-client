<?php

namespace Arimac\Sigfox\Definition;

class Repetition
{
    /**
     * nseq of the repetition
     *
     * @var int
     */
    protected int $nseq;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected int $rssi;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var int
     */
    protected int $snr;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var int
     */
    protected int $freq;
    /**
     * if this repetition has been propagated by a repeater
     *
     * @var bool
     */
    protected bool $repeated;
    /**
     * @param int nseq nseq of the repetition
     */
    function setNseq(int $nseq)
    {
        $this->nseq = $nseq;
    }
    /**
     * @return int nseq of the repetition
     */
    function getNseq() : int
    {
        return $this->nseq;
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
     * @param bool repeated if this repetition has been propagated by a repeater
     */
    function setRepeated(bool $repeated)
    {
        $this->repeated = $repeated;
    }
    /**
     * @return bool if this repetition has been propagated by a repeater
     */
    function getRepeated() : bool
    {
        return $this->repeated;
    }
}