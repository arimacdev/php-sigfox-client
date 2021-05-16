<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @var int
     */
    protected ?int $snr = null;
    /**
     * the frequency at which the message has been received (in Hz)
     *
     * @var int
     */
    protected ?int $freq = null;
    /**
     * if this repetition has been propagated by a repeater
     *
     * @var bool
     */
    protected ?bool $repeated = null;
    /**
     * Setter for nseq
     *
     * @param int $nseq nseq of the repetition
     *
     * @return self To use in method chains
     */
    public function setNseq(?int $nseq) : self
    {
        $this->nseq = $nseq;
        return $this;
    }
    /**
     * Getter for nseq
     *
     * @return int nseq of the repetition
     */
    public function getNseq() : ?int
    {
        return $this->nseq;
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
    public function getSnr() : ?int
    {
        return $this->snr;
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
    public function getFreq() : ?int
    {
        return $this->freq;
    }
    /**
     * Setter for repeated
     *
     * @param bool $repeated if this repetition has been propagated by a repeater
     *
     * @return self To use in method chains
     */
    public function setRepeated(?bool $repeated) : self
    {
        $this->repeated = $repeated;
        return $this;
    }
    /**
     * Getter for repeated
     *
     * @return bool if this repetition has been propagated by a repeater
     */
    public function getRepeated() : ?bool
    {
        return $this->repeated;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('nseq' => new PrimitiveSerializer('int'), 'rssi' => new PrimitiveSerializer('int'), 'snr' => new PrimitiveSerializer('int'), 'freq' => new PrimitiveSerializer('int'), 'repeated' => new PrimitiveSerializer('bool'));
    }
}