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
}