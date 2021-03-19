<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\object;
use Arimac\Sigfox\Definition\ComputedLocation;
use Arimac\Sigfox\Definition\Rinfo;
use Arimac\Sigfox\Definition\object;
class DeviceMessage
{
    /** LIMIT */
    public const LQI_LIMIT = 0;
    /** AVERAGE */
    public const LQI_AVERAGE = 1;
    /** GOOD */
    public const LQI_GOOD = 2;
    /** EXCELLENT */
    public const LQI_EXCELLENT = 3;
    /** NA */
    public const LQI_NA = 4;
    /** LIMIT */
    public const LQI_REPEATERS_LIMIT = 0;
    /** AVERAGE */
    public const LQI_REPEATERS_AVERAGE = 1;
    /** GOOD */
    public const LQI_REPEATERS_GOOD = 2;
    /** EXCELLENT */
    public const LQI_REPEATERS_EXCELLENT = 3;
    /** NA */
    public const LQI_REPEATERS_NA = 4;
    /**
     * Defines a device message
     *
     * @var object
     */
    protected object $device;
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $time;
    /**
     * message content, hex encoded
     *
     * @var string
     */
    protected string $data;
    /**
     * true if an acknowledge is required
     *
     * @var bool
     */
    protected bool $ackRequired;
    /**
     * link quality indicator
     * - `DeviceMessage::LQI_LIMIT`
     * - `DeviceMessage::LQI_AVERAGE`
     * - `DeviceMessage::LQI_GOOD`
     * - `DeviceMessage::LQI_EXCELLENT`
     * - `DeviceMessage::LQI_NA`
     *
     * @var int
     */
    protected int $lqi;
    /**
     * link quality indicator for repeated message
     * - `DeviceMessage::LQI_REPEATERS_LIMIT`
     * - `DeviceMessage::LQI_REPEATERS_AVERAGE`
     * - `DeviceMessage::LQI_REPEATERS_GOOD`
     * - `DeviceMessage::LQI_REPEATERS_EXCELLENT`
     * - `DeviceMessage::LQI_REPEATERS_NA`
     *
     * @var int
     */
    protected int $lqiRepeaters;
    /**
     * the sequence number for this message, may not be present when device uses VO protocol
     *
     * @var int
     */
    protected int $seqNumber;
    /**
     * nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     *
     * @var int
     */
    protected int $nbFrames;
    /** @var ComputedLocation[] */
    protected array $computedLocation;
    /** @var Rinfo[] */
    protected array $rinfos;
    /**
     * the last callback status for this reception
     *
     * @var object
     */
    protected object $downlinkAnswerStatus;
}