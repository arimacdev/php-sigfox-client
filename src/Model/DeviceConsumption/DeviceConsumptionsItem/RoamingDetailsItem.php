<?php

namespace Arimac\Sigfox\Model\DeviceConsumption\DeviceConsumptionsItem;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class RoamingDetailsItem extends Model
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
     * Setter for territory
     *
     * @param string $territory Country of the Operator (3 letters from the ISO 3166-1 alpha-3 country code).
     *
     * @return static To use in method chains
     */
    public function setTerritory(?string $territory)
    {
        $this->territory = $territory;
        return $this;
    }
    /**
     * Getter for territory
     *
     * @return string Country of the Operator (3 letters from the ISO 3166-1 alpha-3 country code).
     */
    public function getTerritory() : ?string
    {
        return $this->territory;
    }
    /**
     * Setter for operator
     *
     * @param string $operator Name of the Operator
     *
     * @return static To use in method chains
     */
    public function setOperator(?string $operator)
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * Getter for operator
     *
     * @return string Name of the Operator
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * Setter for territoryRoamingFrameCount
     *
     * @param int $territoryRoamingFrameCount Number of uplink roaming messages this day for this operator
     *
     * @return static To use in method chains
     */
    public function setTerritoryRoamingFrameCount(?int $territoryRoamingFrameCount)
    {
        $this->territoryRoamingFrameCount = $territoryRoamingFrameCount;
        return $this;
    }
    /**
     * Getter for territoryRoamingFrameCount
     *
     * @return int Number of uplink roaming messages this day for this operator
     */
    public function getTerritoryRoamingFrameCount() : ?int
    {
        return $this->territoryRoamingFrameCount;
    }
    /**
     * Setter for territoryRoamingDownlinkFrameCount
     *
     * @param int $territoryRoamingDownlinkFrameCount Number of downlink roaming messages this day for this operator
     *
     * @return static To use in method chains
     */
    public function setTerritoryRoamingDownlinkFrameCount(?int $territoryRoamingDownlinkFrameCount)
    {
        $this->territoryRoamingDownlinkFrameCount = $territoryRoamingDownlinkFrameCount;
        return $this;
    }
    /**
     * Getter for territoryRoamingDownlinkFrameCount
     *
     * @return int Number of downlink roaming messages this day for this operator
     */
    public function getTerritoryRoamingDownlinkFrameCount() : ?int
    {
        return $this->territoryRoamingDownlinkFrameCount;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('territory' => new PrimitiveSerializer('string'), 'operator' => new PrimitiveSerializer('string'), 'territoryRoamingFrameCount' => new PrimitiveSerializer('int'), 'territoryRoamingDownlinkFrameCount' => new PrimitiveSerializer('int'));
        return $serializers;
    }
}