<?php

namespace Arimac\Sigfox\Definition\DeviceConsumption;

use Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItem\RoamingDetailsItem;
use Arimac\Sigfox\Definition;
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
    /** @var RoamingDetailsItem[] */
    protected ?array $roamingDetails = null;
    /**
     * @param int $frameCount Number of uplink messages this day
     */
    function setFrameCount(?int $frameCount)
    {
        $this->frameCount = $frameCount;
    }
    /**
     * @return int Number of uplink messages this day
     */
    function getFrameCount() : ?int
    {
        return $this->frameCount;
    }
    /**
     * @param int $downlinkFrameCount Number of downlink messages this day
     */
    function setDownlinkFrameCount(?int $downlinkFrameCount)
    {
        $this->downlinkFrameCount = $downlinkFrameCount;
    }
    /**
     * @return int Number of downlink messages this day
     */
    function getDownlinkFrameCount() : ?int
    {
        return $this->downlinkFrameCount;
    }
    /**
     * @param int $roamingFrameCount Number of uplink roaming messages this day
     */
    function setRoamingFrameCount(?int $roamingFrameCount)
    {
        $this->roamingFrameCount = $roamingFrameCount;
    }
    /**
     * @return int Number of uplink roaming messages this day
     */
    function getRoamingFrameCount() : ?int
    {
        return $this->roamingFrameCount;
    }
    /**
     * @param int $roamingDownlinkFrameCount Number of downlink roaming messages this day
     */
    function setRoamingDownlinkFrameCount(?int $roamingDownlinkFrameCount)
    {
        $this->roamingDownlinkFrameCount = $roamingDownlinkFrameCount;
    }
    /**
     * @return int Number of downlink roaming messages this day
     */
    function getRoamingDownlinkFrameCount() : ?int
    {
        return $this->roamingDownlinkFrameCount;
    }
    /**
     * @param RoamingDetailsItem[] roamingDetails
     */
    function setRoamingDetails(?array $roamingDetails)
    {
        $this->roamingDetails = $roamingDetails;
    }
    /**
     * @return RoamingDetailsItem[] roamingDetails
     */
    function getRoamingDetails() : ?array
    {
        return $this->roamingDetails;
    }
}