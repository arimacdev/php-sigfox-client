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
}