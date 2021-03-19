<?php

namespace Arimac\Sigfox\Definition;

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
     */
    protected object $device;
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    protected int $time;
    /**
     * message content, hex encoded
     */
    protected string $data;
    /**
     * true if an acknowledge is required
     */
    protected bool $ackRequired;
    /**
     * link quality indicator
     * - `DeviceMessage::LQI_LIMIT`
     * - `DeviceMessage::LQI_AVERAGE`
     * - `DeviceMessage::LQI_GOOD`
     * - `DeviceMessage::LQI_EXCELLENT`
     * - `DeviceMessage::LQI_NA`
     */
    protected int $lqi;
    /**
     * link quality indicator for repeated message
     * - `DeviceMessage::LQI_REPEATERS_LIMIT`
     * - `DeviceMessage::LQI_REPEATERS_AVERAGE`
     * - `DeviceMessage::LQI_REPEATERS_GOOD`
     * - `DeviceMessage::LQI_REPEATERS_EXCELLENT`
     * - `DeviceMessage::LQI_REPEATERS_NA`
     */
    protected int $lqiRepeaters;
    /**
     * the sequence number for this message, may not be present when device uses VO protocol
     */
    protected int $seqNumber;
    /**
     * nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     */
    protected int $nbFrames;
    protected array $computedLocation;
    protected array $rinfos;
    /**
     * the last callback status for this reception
     */
    protected object $downlinkAnswerStatus;
}