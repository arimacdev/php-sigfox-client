<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Generic information about intervention
 */
class BaseSiteIntervention extends Definition
{
    /**
     * ANTENNA
     */
    public const EQUIPMENTS_TO_CHANGE_ANTENNA = 0;
    /**
     * BASE STATION
     */
    public const EQUIPMENTS_TO_CHANGE_BASE_STATION = 1;
    /**
     * LNA
     */
    public const EQUIPMENTS_TO_CHANGE_LNA = 2;
    /**
     * FEEDER
     */
    public const EQUIPMENTS_TO_CHANGE_FEEDER = 3;
    /**
     * ADSL MODEM
     */
    public const EQUIPMENTS_TO_CHANGE_ADSL_MODEM = 4;
    /**
     * NETWORK CABLE
     */
    public const EQUIPMENTS_TO_CHANGE_NETWORK_CABLE = 5;
    /**
     * SURGE
     */
    public const EQUIPMENTS_TO_CHANGE_SURGE = 6;
    /**
     * WATERPROOFNESS
     */
    public const EQUIPMENTS_TO_CHANGE_WATERPROOFNESS = 7;
    /**
     * SAT DEMOD
     */
    public const EQUIPMENTS_TO_CHANGE_SAT_DEMOD = 8;
    /**
     * SAT LNB
     */
    public const EQUIPMENTS_TO_CHANGE_SAT_LNB = 9;
    /**
     * SAT DISH
     */
    public const EQUIPMENTS_TO_CHANGE_SAT_DISH = 10;
    /**
     * SAT POWER SUPPLY
     */
    public const EQUIPMENTS_TO_CHANGE_SAT_POWER_SUPPLY = 11;
    /**
     * INVERTER
     */
    public const EQUIPMENTS_TO_CHANGE_INVERTER = 12;
    /**
     * KEY 3G
     */
    public const EQUIPMENTS_TO_CHANGE_KEY_3G = 13;
    /**
     * CIRCUIT BREAKER
     */
    public const EQUIPMENTS_TO_CHANGE_CIRCUIT_BREAKER = 14;
    /**
     * ROUTER 3G
     */
    public const EQUIPMENTS_TO_CHANGE_ROUTER_3G = 15;
    /**
     * OTHER
     */
    public const TYPE_OTHER = 0;
    /**
     * PRE VISIT
     */
    public const TYPE_PRE_VISIT = 1;
    /**
     * ANTENNA INSTALLATION
     */
    public const TYPE_ANTENNA_INSTALLATION = 2;
    /**
     * TELECOM LINE INSTALLATION
     */
    public const TYPE_TELECOM_LINE_INSTALLATION = 3;
    /**
     * SITE SEARCH
     */
    public const TYPE_SITE_SEARCH = 4;
    /**
     * SAT INSTALLATION
     */
    public const TYPE_SAT_INSTALLATION = 5;
    /**
     * ELECTRICAL
     */
    public const TYPE_ELECTRICAL = 6;
    /**
     * DISMANTLING
     */
    public const TYPE_DISMANTLING = 7;
    /**
     * The author of this intervention
     *
     * @var string
     */
    protected ?string $author = null;
    /**
     * The comment about this intervention
     *
     * @var string
     */
    protected ?string $comment = null;
    /**
     * List of equipment to change for this intervention
     *
     * @var self::EQUIPMENTS_TO_CHANGE_*[]
     */
    protected ?array $equipmentsToChange = null;
    /**
     * The planned time of this intervention
     *
     * @var int
     */
    protected ?int $plannedTime = null;
    /**
     * The time of this intervention
     *
     * @var int
     */
    protected ?int $interventionTime = null;
    /**
     * The end time of this intervention
     *
     * @var int
     */
    protected ?int $endTime = null;
    /**
     * The bill code of this intervention
     *
     * @var string
     */
    protected ?string $billCode = null;
    /**
     * The request tracker identifier of this intervention
     *
     * @var string
     */
    protected ?string $rtId = null;
    /**
     * is this intervention closed
     *
     * @var bool
     */
    protected ?bool $closed = null;
    /**
     * The costs of this intervention
     *
     * @var int
     */
    protected ?int $costs = null;
    /**
     * Convention status.
     *
     * @var self::TYPE_*
     */
    protected ?int $type = null;
    /**
     * Setter for author
     *
     * @param string $author The author of this intervention
     *
     * @return self To use in method chains
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * Getter for author
     *
     * @return string The author of this intervention
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * Setter for comment
     *
     * @param string $comment The comment about this intervention
     *
     * @return self To use in method chains
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Getter for comment
     *
     * @return string The comment about this intervention
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * Setter for equipmentsToChange
     *
     * @param self::EQUIPMENTS_TO_CHANGE_*[] $equipmentsToChange List of equipment to change for this intervention
     *
     * @return self To use in method chains
     */
    public function setEquipmentsToChange(?array $equipmentsToChange) : self
    {
        $this->equipmentsToChange = $equipmentsToChange;
        return $this;
    }
    /**
     * Getter for equipmentsToChange
     *
     * @return self::EQUIPMENTS_TO_CHANGE_*[] List of equipment to change for this intervention
     */
    public function getEquipmentsToChange() : array
    {
        return $this->equipmentsToChange;
    }
    /**
     * Setter for plannedTime
     *
     * @param int $plannedTime The planned time of this intervention
     *
     * @return self To use in method chains
     */
    public function setPlannedTime(?int $plannedTime) : self
    {
        $this->plannedTime = $plannedTime;
        return $this;
    }
    /**
     * Getter for plannedTime
     *
     * @return int The planned time of this intervention
     */
    public function getPlannedTime() : int
    {
        return $this->plannedTime;
    }
    /**
     * Setter for interventionTime
     *
     * @param int $interventionTime The time of this intervention
     *
     * @return self To use in method chains
     */
    public function setInterventionTime(?int $interventionTime) : self
    {
        $this->interventionTime = $interventionTime;
        return $this;
    }
    /**
     * Getter for interventionTime
     *
     * @return int The time of this intervention
     */
    public function getInterventionTime() : int
    {
        return $this->interventionTime;
    }
    /**
     * Setter for endTime
     *
     * @param int $endTime The end time of this intervention
     *
     * @return self To use in method chains
     */
    public function setEndTime(?int $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Getter for endTime
     *
     * @return int The end time of this intervention
     */
    public function getEndTime() : int
    {
        return $this->endTime;
    }
    /**
     * Setter for billCode
     *
     * @param string $billCode The bill code of this intervention
     *
     * @return self To use in method chains
     */
    public function setBillCode(?string $billCode) : self
    {
        $this->billCode = $billCode;
        return $this;
    }
    /**
     * Getter for billCode
     *
     * @return string The bill code of this intervention
     */
    public function getBillCode() : string
    {
        return $this->billCode;
    }
    /**
     * Setter for rtId
     *
     * @param string $rtId The request tracker identifier of this intervention
     *
     * @return self To use in method chains
     */
    public function setRtId(?string $rtId) : self
    {
        $this->rtId = $rtId;
        return $this;
    }
    /**
     * Getter for rtId
     *
     * @return string The request tracker identifier of this intervention
     */
    public function getRtId() : string
    {
        return $this->rtId;
    }
    /**
     * Setter for closed
     *
     * @param bool $closed is this intervention closed
     *
     * @return self To use in method chains
     */
    public function setClosed(?bool $closed) : self
    {
        $this->closed = $closed;
        return $this;
    }
    /**
     * Getter for closed
     *
     * @return bool is this intervention closed
     */
    public function getClosed() : bool
    {
        return $this->closed;
    }
    /**
     * Setter for costs
     *
     * @param int $costs The costs of this intervention
     *
     * @return self To use in method chains
     */
    public function setCosts(?int $costs) : self
    {
        $this->costs = $costs;
        return $this;
    }
    /**
     * Getter for costs
     *
     * @return int The costs of this intervention
     */
    public function getCosts() : int
    {
        return $this->costs;
    }
    /**
     * Setter for type
     *
     * @param self::TYPE_* $type Convention status.
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return self::TYPE_* Convention status.
     */
    public function getType() : int
    {
        return $this->type;
    }
}