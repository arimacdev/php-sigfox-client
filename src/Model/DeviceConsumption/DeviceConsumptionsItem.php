<?php

namespace Arimac\Sigfox\Model\DeviceConsumption;

use Arimac\Sigfox\Model\DeviceConsumption\DeviceConsumptionsItem\RoamingDetailsItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class DeviceConsumptionsItem extends Model
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
     * @return static To use in method chains
     */
    public function setFrameCount(?int $frameCount)
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
     * @return static To use in method chains
     */
    public function setDownlinkFrameCount(?int $downlinkFrameCount)
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
     * @return static To use in method chains
     */
    public function setRoamingFrameCount(?int $roamingFrameCount)
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
     * @return static To use in method chains
     */
    public function setRoamingDownlinkFrameCount(?int $roamingDownlinkFrameCount)
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
     * @return static To use in method chains
     */
    public function setRoamingDetails(?array $roamingDetails)
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
        $serializers = array('frameCount' => new PrimitiveSerializer('int'), 'downlinkFrameCount' => new PrimitiveSerializer('int'), 'roamingFrameCount' => new PrimitiveSerializer('int'), 'roamingDownlinkFrameCount' => new PrimitiveSerializer('int'), 'roamingDetails' => new ArraySerializer(new ClassSerializer(RoamingDetailsItem::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('roamingDetails' => array(new ChildSet()));
        return $rules;
    }
}