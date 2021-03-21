<?php

namespace Arimac\Sigfox\Definition\DeviceConsumption\DeviceConsumptionsItem;

use Arimac\Sigfox\Definition;
class RoamingDetailsItem extends Definition
{
    /**
     * Country of the Operator (3 letters from the ISO 3166-1 alpha-3 country code).
     *
     * @var string
     */
    protected ?string $territory = null;
    /**
     * Name of the Operator
     *
     * @var string
     */
    protected ?string $operator = null;
    /**
     * Number of uplink roaming messages this day for this operator
     *
     * @var int
     */
    protected ?int $territoryRoamingFrameCount = null;
    /**
     * Number of downlink roaming messages this day for this operator
     *
     * @var int
     */
    protected ?int $territoryRoamingDownlinkFrameCount = null;
    /**
     * @param string $territory Country of the Operator (3 letters from the ISO 3166-1 alpha-3 country code).
     */
    function setTerritory(?string $territory)
    {
        $this->territory = $territory;
    }
    /**
     * @return string Country of the Operator (3 letters from the ISO 3166-1 alpha-3 country code).
     */
    function getTerritory() : ?string
    {
        return $this->territory;
    }
    /**
     * @param string $operator Name of the Operator
     */
    function setOperator(?string $operator)
    {
        $this->operator = $operator;
    }
    /**
     * @return string Name of the Operator
     */
    function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * @param int $territoryRoamingFrameCount Number of uplink roaming messages this day for this operator
     */
    function setTerritoryRoamingFrameCount(?int $territoryRoamingFrameCount)
    {
        $this->territoryRoamingFrameCount = $territoryRoamingFrameCount;
    }
    /**
     * @return int Number of uplink roaming messages this day for this operator
     */
    function getTerritoryRoamingFrameCount() : ?int
    {
        return $this->territoryRoamingFrameCount;
    }
    /**
     * @param int $territoryRoamingDownlinkFrameCount Number of downlink roaming messages this day for this operator
     */
    function setTerritoryRoamingDownlinkFrameCount(?int $territoryRoamingDownlinkFrameCount)
    {
        $this->territoryRoamingDownlinkFrameCount = $territoryRoamingDownlinkFrameCount;
    }
    /**
     * @return int Number of downlink roaming messages this day for this operator
     */
    function getTerritoryRoamingDownlinkFrameCount() : ?int
    {
        return $this->territoryRoamingDownlinkFrameCount;
    }
}