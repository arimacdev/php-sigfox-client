<?php

namespace Arimac\Sigfox\Definition\DeviceConsumption;

use Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItem\RoamingDetailsItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class DeviceConsumptionsItem extends Definition
{
    /**
     * Number of uplink messages this day
     *
     * @var int
     */
    protected ?int $frameCount = null;
    /**
     * Number of downlink messages this day
     *
     * @var int
     */
    protected ?int $downlinkFrameCount = null;
    /**
     * Number of uplink roaming messages this day
     *
     * @var int
     */
    protected ?int $roamingFrameCount = null;
    /**
     * Number of downlink roaming messages this day
     *
     * @var int
     */
    protected ?int $roamingDownlinkFrameCount = null;
    /**
     * @var RoamingDetailsItem[]
     */
    protected ?array $roamingDetails = null;
    /**
     * Setter for frameCount
     *
     * @param int $frameCount Number of uplink messages this day
     *
     * @return self To use in method chains
     */
    public function setFrameCount(?int $frameCount) : self
    {
        $this->frameCount = $frameCount;
        return $this;
    }
    /**
     * Getter for frameCount
     *
     * @return int Number of uplink messages this day
     */
    public function getFrameCount() : ?int
    {
        return $this->frameCount;
    }
    /**
     * Setter for downlinkFrameCount
     *
     * @param int $downlinkFrameCount Number of downlink messages this day
     *
     * @return self To use in method chains
     */
    public function setDownlinkFrameCount(?int $downlinkFrameCount) : self
    {
        $this->downlinkFrameCount = $downlinkFrameCount;
        return $this;
    }
    /**
     * Getter for downlinkFrameCount
     *
     * @return int Number of downlink messages this day
     */
    public function getDownlinkFrameCount() : ?int
    {
        return $this->downlinkFrameCount;
    }
    /**
     * Setter for roamingFrameCount
     *
     * @param int $roamingFrameCount Number of uplink roaming messages this day
     *
     * @return self To use in method chains
     */
    public function setRoamingFrameCount(?int $roamingFrameCount) : self
    {
        $this->roamingFrameCount = $roamingFrameCount;
        return $this;
    }
    /**
     * Getter for roamingFrameCount
     *
     * @return int Number of uplink roaming messages this day
     */
    public function getRoamingFrameCount() : ?int
    {
        return $this->roamingFrameCount;
    }
    /**
     * Setter for roamingDownlinkFrameCount
     *
     * @param int $roamingDownlinkFrameCount Number of downlink roaming messages this day
     *
     * @return self To use in method chains
     */
    public function setRoamingDownlinkFrameCount(?int $roamingDownlinkFrameCount) : self
    {
        $this->roamingDownlinkFrameCount = $roamingDownlinkFrameCount;
        return $this;
    }
    /**
     * Getter for roamingDownlinkFrameCount
     *
     * @return int Number of downlink roaming messages this day
     */
    public function getRoamingDownlinkFrameCount() : ?int
    {
        return $this->roamingDownlinkFrameCount;
    }
    /**
     * Setter for roamingDetails
     *
     * @param RoamingDetailsItem[] $roamingDetails
     *
     * @return self To use in method chains
     */
    public function setRoamingDetails(?array $roamingDetails) : self
    {
        $this->roamingDetails = $roamingDetails;
        return $this;
    }
    /**
     * Getter for roamingDetails
     *
     * @return RoamingDetailsItem[]
     */
    public function getRoamingDetails() : ?array
    {
        return $this->roamingDetails;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('frameCount' => new PrimitiveSerializer(self::class, 'frameCount', 'int'), 'downlinkFrameCount' => new PrimitiveSerializer(self::class, 'downlinkFrameCount', 'int'), 'roamingFrameCount' => new PrimitiveSerializer(self::class, 'roamingFrameCount', 'int'), 'roamingDownlinkFrameCount' => new PrimitiveSerializer(self::class, 'roamingDownlinkFrameCount', 'int'), 'roamingDetails' => new ArraySerializer(self::class, 'roamingDetails', new ClassSerializer(self::class, 'roamingDetails', RoamingDetailsItem::class)));
    }
}