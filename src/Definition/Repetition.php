<?php

namespace Arimac\Sigfox\Definition;

class Repetition
{
    /**
     * nseq of the repetition
     */
    protected int $nseq;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    protected int $rssi;
    /**
     * the best signal of all repetitions for this base station
     */
    protected int $snr;
    /**
     * the frequency at which the message has been received (in Hz)
     */
    protected int $freq;
    /**
     * if this repetition has been propagated by a repeater
     */
    protected bool $repeated;
}