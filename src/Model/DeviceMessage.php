<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class DeviceMessage extends Model
{
    /**
     * LIMIT
     */
    public const LQI_LIMIT = 0;
    /**
     * AVERAGE
     */
    public const LQI_AVERAGE = 1;
    /**
     * GOOD
     */
    public const LQI_GOOD = 2;
    /**
     * EXCELLENT
     */
    public const LQI_EXCELLENT = 3;
    /**
     * NA
     */
    public const LQI_NA = 4;
    /**
     * LIMIT
     */
    public const LQI_REPEATERS_LIMIT = 0;
    /**
     * AVERAGE
     */
    public const LQI_REPEATERS_AVERAGE = 1;
    /**
     * GOOD
     */
    public const LQI_REPEATERS_GOOD = 2;
    /**
     * EXCELLENT
     */
    public const LQI_REPEATERS_EXCELLENT = 3;
    /**
     * NA
     */
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
     * 
     * - {@see DeviceMessage::LQI_LIMIT}
     * - {@see DeviceMessage::LQI_AVERAGE}
     * - {@see DeviceMessage::LQI_GOOD}
     * - {@see DeviceMessage::LQI_EXCELLENT}
     * - {@see DeviceMessage::LQI_NA}
     *
     * @var int
     */
    protected ?int $lqi = null;
    /**
     * link quality indicator for repeated message
     * 
     * - {@see DeviceMessage::LQI_REPEATERS_LIMIT}
     * - {@see DeviceMessage::LQI_REPEATERS_AVERAGE}
     * - {@see DeviceMessage::LQI_REPEATERS_GOOD}
     * - {@see DeviceMessage::LQI_REPEATERS_EXCELLENT}
     * - {@see DeviceMessage::LQI_REPEATERS_NA}
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
    /**
     * @var ComputedLocation[]
     */
    protected ?array $computedLocation = null;
    /**
     * @var Rinfo[]
     */
    protected ?array $rinfos = null;
    /**
     * the last callback status for this reception
     *
     * @var DownlinkAnswerStatus
     */
    protected ?DownlinkAnswerStatus $downlinkAnswerStatus = null;
    /**
     * Setter for device
     *
     * @param CommonDevice $device Defines a device message
     *
     * @return static To use in method chains
     */
    public function setDevice(?CommonDevice $device)
    {
        $this->device = $device;
        return $this;
    }
    /**
     * Getter for device
     *
     * @return CommonDevice Defines a device message
     */
    public function getDevice() : ?CommonDevice
    {
        return $this->device;
    }
    /**
     * Setter for time
     *
     * @param int $time Timestamp of the message (in milliseconds since the Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setTime(?int $time)
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Getter for time
     *
     * @return int Timestamp of the message (in milliseconds since the Unix Epoch)
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * Setter for data
     *
     * @param string $data message content, hex encoded
     *
     * @return static To use in method chains
     */
    public function setData(?string $data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return string message content, hex encoded
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * Setter for ackRequired
     *
     * @param bool $ackRequired true if an acknowledge is required
     *
     * @return static To use in method chains
     */
    public function setAckRequired(?bool $ackRequired)
    {
        $this->ackRequired = $ackRequired;
        return $this;
    }
    /**
     * Getter for ackRequired
     *
     * @return bool true if an acknowledge is required
     */
    public function getAckRequired() : ?bool
    {
        return $this->ackRequired;
    }
    /**
     * Setter for lqi
     *
     * @param int $lqi link quality indicator
     *                 
     *                 - {@see DeviceMessage::LQI_LIMIT}
     *                 - {@see DeviceMessage::LQI_AVERAGE}
     *                 - {@see DeviceMessage::LQI_GOOD}
     *                 - {@see DeviceMessage::LQI_EXCELLENT}
     *                 - {@see DeviceMessage::LQI_NA}
     *                 
     *
     * @return static To use in method chains
     */
    public function setLqi(?int $lqi)
    {
        $this->lqi = $lqi;
        return $this;
    }
    /**
     * Getter for lqi
     *
     * @return int link quality indicator
     *             
     *             - {@see DeviceMessage::LQI_LIMIT}
     *             - {@see DeviceMessage::LQI_AVERAGE}
     *             - {@see DeviceMessage::LQI_GOOD}
     *             - {@see DeviceMessage::LQI_EXCELLENT}
     *             - {@see DeviceMessage::LQI_NA}
     *             
     */
    public function getLqi() : ?int
    {
        return $this->lqi;
    }
    /**
     * Setter for lqiRepeaters
     *
     * @param int $lqiRepeaters link quality indicator for repeated message
     *                          
     *                          - {@see DeviceMessage::LQI_REPEATERS_LIMIT}
     *                          - {@see DeviceMessage::LQI_REPEATERS_AVERAGE}
     *                          - {@see DeviceMessage::LQI_REPEATERS_GOOD}
     *                          - {@see DeviceMessage::LQI_REPEATERS_EXCELLENT}
     *                          - {@see DeviceMessage::LQI_REPEATERS_NA}
     *                          
     *
     * @return static To use in method chains
     */
    public function setLqiRepeaters(?int $lqiRepeaters)
    {
        $this->lqiRepeaters = $lqiRepeaters;
        return $this;
    }
    /**
     * Getter for lqiRepeaters
     *
     * @return int link quality indicator for repeated message
     *             
     *             - {@see DeviceMessage::LQI_REPEATERS_LIMIT}
     *             - {@see DeviceMessage::LQI_REPEATERS_AVERAGE}
     *             - {@see DeviceMessage::LQI_REPEATERS_GOOD}
     *             - {@see DeviceMessage::LQI_REPEATERS_EXCELLENT}
     *             - {@see DeviceMessage::LQI_REPEATERS_NA}
     *             
     */
    public function getLqiRepeaters() : ?int
    {
        return $this->lqiRepeaters;
    }
    /**
     * Setter for seqNumber
     *
     * @param int $seqNumber the sequence number for this message, may not be present when device uses VO protocol
     *
     * @return static To use in method chains
     */
    public function setSeqNumber(?int $seqNumber)
    {
        $this->seqNumber = $seqNumber;
        return $this;
    }
    /**
     * Getter for seqNumber
     *
     * @return int the sequence number for this message, may not be present when device uses VO protocol
     */
    public function getSeqNumber() : ?int
    {
        return $this->seqNumber;
    }
    /**
     * Setter for nbFrames
     *
     * @param int $nbFrames nbFrames can be 1 or 3. This value represents an expected number of frames sent by the
     *                      device.
     *
     * @return static To use in method chains
     */
    public function setNbFrames(?int $nbFrames)
    {
        $this->nbFrames = $nbFrames;
        return $this;
    }
    /**
     * Getter for nbFrames
     *
     * @return int nbFrames can be 1 or 3. This value represents an expected number of frames sent by the device.
     */
    public function getNbFrames() : ?int
    {
        return $this->nbFrames;
    }
    /**
     * Setter for computedLocation
     *
     * @param ComputedLocation[] $computedLocation
     *
     * @return static To use in method chains
     */
    public function setComputedLocation(?array $computedLocation)
    {
        $this->computedLocation = $computedLocation;
        return $this;
    }
    /**
     * Getter for computedLocation
     *
     * @return ComputedLocation[]
     */
    public function getComputedLocation() : ?array
    {
        return $this->computedLocation;
    }
    /**
     * Setter for rinfos
     *
     * @param Rinfo[] $rinfos
     *
     * @return static To use in method chains
     */
    public function setRinfos(?array $rinfos)
    {
        $this->rinfos = $rinfos;
        return $this;
    }
    /**
     * Getter for rinfos
     *
     * @return Rinfo[]
     */
    public function getRinfos() : ?array
    {
        return $this->rinfos;
    }
    /**
     * Setter for downlinkAnswerStatus
     *
     * @param DownlinkAnswerStatus $downlinkAnswerStatus the last callback status for this reception
     *
     * @return static To use in method chains
     */
    public function setDownlinkAnswerStatus(?DownlinkAnswerStatus $downlinkAnswerStatus)
    {
        $this->downlinkAnswerStatus = $downlinkAnswerStatus;
        return $this;
    }
    /**
     * Getter for downlinkAnswerStatus
     *
     * @return DownlinkAnswerStatus the last callback status for this reception
     */
    public function getDownlinkAnswerStatus() : ?DownlinkAnswerStatus
    {
        return $this->downlinkAnswerStatus;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('device' => new ClassSerializer(CommonDevice::class), 'time' => new PrimitiveSerializer('int'), 'data' => new PrimitiveSerializer('string'), 'ackRequired' => new PrimitiveSerializer('bool'), 'lqi' => new PrimitiveSerializer('int'), 'lqiRepeaters' => new PrimitiveSerializer('int'), 'seqNumber' => new PrimitiveSerializer('int'), 'nbFrames' => new PrimitiveSerializer('int'), 'computedLocation' => new ArraySerializer(new ClassSerializer(ComputedLocation::class)), 'rinfos' => new ArraySerializer(new ClassSerializer(Rinfo::class)), 'downlinkAnswerStatus' => new ClassSerializer(DownlinkAnswerStatus::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('device' => array(new Child()), 'computedLocation' => array(new ChildSet()), 'rinfos' => array(new ChildSet()), 'downlinkAnswerStatus' => array(new Child()));
        return $rules;
    }
}