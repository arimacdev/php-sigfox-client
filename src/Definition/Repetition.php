<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class Repetition extends Definition
{
    /**
     * nseq of the repetition
     *
     * @var int
     */
    protected ?int $nseq = null;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     *
     * @var int
     */
    protected ?int $rssi = null;
    /**
     * the best signal of all repetitions for this base station
     *
     * @var float
     */
    protected ?float $snr = null;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var float
     */
    protected ?float $freq = null;
    /**
     * if this repetition has been propagated by a repeater
     *
     * @var bool
     */
    protected ?bool $repeated = null;
    /**
     * @param int $nseq nseq of the repetition
     */
    function setNseq(?int $nseq)
    {
        $this->nseq = $nseq;
    }
    /**
     * @return int nseq of the repetition
     */
    function getNseq() : ?int
    {
        return $this->nseq;
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
     * @param bool $repeated if this repetition has been propagated by a repeater
     */
    function setRepeated(?bool $repeated)
    {
        $this->repeated = $repeated;
    }
    /**
     * @return bool if this repetition has been propagated by a repeater
     */
    function getRepeated() : ?bool
    {
        return $this->repeated;
    }
}