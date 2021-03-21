<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonDevice;
use Arimac\Sigfox\Definition\ComputedLocation;
use Arimac\Sigfox\Definition\Rinfo;
use Arimac\Sigfox\Definition\DownlinkAnswerStatus;
use Arimac\Sigfox\Definition;
class DeviceMessage extends Definition
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
     * @var CommonDevice
     */
    protected ?CommonDevice $device = null;
    /**
     * Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $time = null;
    /**
     * message content, hex encoded
     *
     * @var string
     */
    protected ?string $data = null;
    /**
     * true if an acknowledge is required
     *
     * @var bool
     */
    protected ?bool $ackRequired = null;
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
    protected ?int $lqi = null;
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
    protected ?int $lqiRepeaters = null;
    /**
     * the sequence number for this message, may not be present when device uses VO protocol
     *
     * @var int
     */
    protected ?int $seqNumber = null;
    /**
     * nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     *
     * @var int
     */
    protected ?int $nbFrames = null;
    /** @var ComputedLocation[] */
    protected ?array $computedLocation = null;
    /** @var Rinfo[] */
    protected ?array $rinfos = null;
    /**
     * the last callback status for this reception
     *
     * @var DownlinkAnswerStatus
     */
    protected ?DownlinkAnswerStatus $downlinkAnswerStatus = null;
    protected $objects = array('device' => '\\Arimac\\Sigfox\\Definition\\CommonDevice', 'downlinkAnswerStatus' => '\\Arimac\\Sigfox\\Definition\\DownlinkAnswerStatus');
    /**
     * @param CommonDevice $device Defines a device message
     */
    function setDevice(?CommonDevice $device)
    {
        $this->device = $device;
    }
    /**
     * @return CommonDevice Defines a device message
     */
    function getDevice() : ?CommonDevice
    {
        return $this->device;
    }
    /**
     * @param int $time Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    function setTime(?int $time)
    {
        $this->time = $time;
    }
    /**
     * @return int Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * @param string $data message content, hex encoded
     */
    function setData(?string $data)
    {
        $this->data = $data;
    }
    /**
     * @return string message content, hex encoded
     */
    function getData() : ?string
    {
        return $this->data;
    }
    /**
     * @param bool $ackRequired true if an acknowledge is required
     */
    function setAckRequired(?bool $ackRequired)
    {
        $this->ackRequired = $ackRequired;
    }
    /**
     * @return bool true if an acknowledge is required
     */
    function getAckRequired() : ?bool
    {
        return $this->ackRequired;
    }
    /**
     * @param int $lqi link quality indicator
     * - `DeviceMessage::LQI_LIMIT`
     * - `DeviceMessage::LQI_AVERAGE`
     * - `DeviceMessage::LQI_GOOD`
     * - `DeviceMessage::LQI_EXCELLENT`
     * - `DeviceMessage::LQI_NA`
     */
    function setLqi(?int $lqi)
    {
        $this->lqi = $lqi;
    }
    /**
     * @return int link quality indicator
     * - `DeviceMessage::LQI_LIMIT`
     * - `DeviceMessage::LQI_AVERAGE`
     * - `DeviceMessage::LQI_GOOD`
     * - `DeviceMessage::LQI_EXCELLENT`
     * - `DeviceMessage::LQI_NA`
     */
    function getLqi() : ?int
    {
        return $this->lqi;
    }
    /**
     * @param int $lqiRepeaters link quality indicator for repeated message
     * - `DeviceMessage::LQI_REPEATERS_LIMIT`
     * - `DeviceMessage::LQI_REPEATERS_AVERAGE`
     * - `DeviceMessage::LQI_REPEATERS_GOOD`
     * - `DeviceMessage::LQI_REPEATERS_EXCELLENT`
     * - `DeviceMessage::LQI_REPEATERS_NA`
     */
    function setLqiRepeaters(?int $lqiRepeaters)
    {
        $this->lqiRepeaters = $lqiRepeaters;
    }
    /**
     * @return int link quality indicator for repeated message
     * - `DeviceMessage::LQI_REPEATERS_LIMIT`
     * - `DeviceMessage::LQI_REPEATERS_AVERAGE`
     * - `DeviceMessage::LQI_REPEATERS_GOOD`
     * - `DeviceMessage::LQI_REPEATERS_EXCELLENT`
     * - `DeviceMessage::LQI_REPEATERS_NA`
     */
    function getLqiRepeaters() : ?int
    {
        return $this->lqiRepeaters;
    }
    /**
     * @param int $seqNumber the sequence number for this message, may not be present when device uses VO protocol
     */
    function setSeqNumber(?int $seqNumber)
    {
        $this->seqNumber = $seqNumber;
    }
    /**
     * @return int the sequence number for this message, may not be present when device uses VO protocol
     */
    function getSeqNumber() : ?int
    {
        return $this->seqNumber;
    }
    /**
     * @param int $nbFrames nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     */
    function setNbFrames(?int $nbFrames)
    {
        $this->nbFrames = $nbFrames;
    }
    /**
     * @return int nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     */
    function getNbFrames() : ?int
    {
        return $this->nbFrames;
    }
    /**
     * @param ComputedLocation[] computedLocation
     */
    function setComputedLocation(?array $computedLocation)
    {
        $this->computedLocation = $computedLocation;
    }
    /**
     * @return ComputedLocation[] computedLocation
     */
    function getComputedLocation() : ?array
    {
        return $this->computedLocation;
    }
    /**
     * @param Rinfo[] rinfos
     */
    function setRinfos(?array $rinfos)
    {
        $this->rinfos = $rinfos;
    }
    /**
     * @return Rinfo[] rinfos
     */
    function getRinfos() : ?array
    {
        return $this->rinfos;
    }
    /**
     * @param DownlinkAnswerStatus $downlinkAnswerStatus the last callback status for this reception
     */
    function setDownlinkAnswerStatus(?DownlinkAnswerStatus $downlinkAnswerStatus)
    {
        $this->downlinkAnswerStatus = $downlinkAnswerStatus;
    }
    /**
     * @return DownlinkAnswerStatus the last callback status for this reception
     */
    function getDownlinkAnswerStatus() : ?DownlinkAnswerStatus
    {
        return $this->downlinkAnswerStatus;
    }
}