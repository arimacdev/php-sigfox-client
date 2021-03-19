<?php

namespace Arimac\Sigfox\Definition;

class Rinfo
{
    /**
     * Name and Id of the base station which has received the message.
     */
    protected object $baseStation;
    /**
     * Received Signal Strength Indication (in dBm – Float value with two maximum fraction digits)
     */
    protected int $rssi;
    /**
     * Received Signal Strength Indication from repeaters (in dBm – Float value with two maximum fraction digits)
     */
    protected int $rssiRepeaters;
    /**
     * The latitude of the base station that has received the message.
     */
    protected int $lat;
    /**
     * The longitude of the base station that has received the message.
     */
    protected int $lng;
    /**
     * the delay (in second) between sending and receiving the message, may not be present.
     */
    protected int $delay;
    /**
     * the best signal of all repetitions for this base station
     */
    protected int $snr;
    /**
     * the best signal of all repetitions for this base station coming from repeaters
     */
    protected int $snrRepeaters;
    /**
     * the frequency at which the message has been received (in Hz)
     */
    protected int $freq;
    /**
     * the frequency at which the message has been received (in Hz) form repeaters
     */
    protected int $freqRepeaters;
    /**
     * number of repetitions sent by the base station
     */
    protected int $rep;
    /**
     * detail of the repetitions
     */
    protected array $repetitions;
    /**
     * list of callback status for this reception
     */
    protected array $cbStatus;
}