<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about intervention
 */
class BaseSiteIntervention
{
    /** ANTENNA */
    public const EQUIPMENTS_TO_CHANGE_ANTENNA = 0;
    /** BASE STATION */
    public const EQUIPMENTS_TO_CHANGE_BASE_STATION = 1;
    /** LNA */
    public const EQUIPMENTS_TO_CHANGE_LNA = 2;
    /** FEEDER */
    public const EQUIPMENTS_TO_CHANGE_FEEDER = 3;
    /** ADSL MODEM */
    public const EQUIPMENTS_TO_CHANGE_ADSL_MODEM = 4;
    /** NETWORK CABLE */
    public const EQUIPMENTS_TO_CHANGE_NETWORK_CABLE = 5;
    /** SURGE */
    public const EQUIPMENTS_TO_CHANGE_SURGE = 6;
    /** WATERPROOFNESS */
    public const EQUIPMENTS_TO_CHANGE_WATERPROOFNESS = 7;
    /** SAT DEMOD */
    public const EQUIPMENTS_TO_CHANGE_SAT_DEMOD = 8;
    /** SAT LNB */
    public const EQUIPMENTS_TO_CHANGE_SAT_LNB = 9;
    /** SAT DISH */
    public const EQUIPMENTS_TO_CHANGE_SAT_DISH = 10;
    /** SAT POWER SUPPLY */
    public const EQUIPMENTS_TO_CHANGE_SAT_POWER_SUPPLY = 11;
    /** INVERTER */
    public const EQUIPMENTS_TO_CHANGE_INVERTER = 12;
    /** KEY 3G */
    public const EQUIPMENTS_TO_CHANGE_KEY_3G = 13;
    /** CIRCUIT BREAKER */
    public const EQUIPMENTS_TO_CHANGE_CIRCUIT_BREAKER = 14;
    /** ROUTER 3G */
    public const EQUIPMENTS_TO_CHANGE_ROUTER_3G = 15;
    /** OTHER */
    public const TYPE_OTHER = 0;
    /** PRE VISIT */
    public const TYPE_PRE_VISIT = 1;
    /** ANTENNA INSTALLATION */
    public const TYPE_ANTENNA_INSTALLATION = 2;
    /** TELECOM LINE INSTALLATION */
    public const TYPE_TELECOM_LINE_INSTALLATION = 3;
    /** SITE SEARCH */
    public const TYPE_SITE_SEARCH = 4;
    /** SAT INSTALLATION */
    public const TYPE_SAT_INSTALLATION = 5;
    /** ELECTRICAL */
    public const TYPE_ELECTRICAL = 6;
    /** DISMANTLING */
    public const TYPE_DISMANTLING = 7;
    /**
     * The author of this intervention
     *
     * @var string
     */
    protected string $author;
    /**
     * The comment about this intervention
     *
     * @var string
     */
    protected string $comment;
    /**
     * List of equipment to change for this intervention
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_ANTENNA`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_BASE_STATION`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_LNA`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_FEEDER`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_ADSL_MODEM`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_NETWORK_CABLE`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_SURGE`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_WATERPROOFNESS`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_SAT_DEMOD`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_SAT_LNB`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_SAT_DISH`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_SAT_POWER_SUPPLY`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_INVERTER`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_KEY_3G`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_CIRCUIT_BREAKER`
     * - `BaseSiteIntervention::EQUIPMENTS_TO_CHANGE_ROUTER_3G`
     *
     * @var int[]
     */
    protected array $equipmentsToChange;
    /**
     * The planned time of this intervention
     *
     * @var int
     */
    protected int $plannedTime;
    /**
     * The time of this intervention
     *
     * @var int
     */
    protected int $interventionTime;
    /**
     * The end time of this intervention
     *
     * @var int
     */
    protected int $endTime;
    /**
     * The bill code of this intervention
     *
     * @var string
     */
    protected string $billCode;
    /**
     * The request tracker identifier of this intervention
     *
     * @var string
     */
    protected string $rtId;
    /**
     * is this intervention closed
     *
     * @var bool
     */
    protected bool $closed;
    /**
     * The costs of this intervention
     *
     * @var int
     */
    protected int $costs;
    /**
     * Convention status.
     * - `BaseSiteIntervention::TYPE_OTHER`
     * - `BaseSiteIntervention::TYPE_PRE_VISIT`
     * - `BaseSiteIntervention::TYPE_ANTENNA_INSTALLATION`
     * - `BaseSiteIntervention::TYPE_TELECOM_LINE_INSTALLATION`
     * - `BaseSiteIntervention::TYPE_SITE_SEARCH`
     * - `BaseSiteIntervention::TYPE_SAT_INSTALLATION`
     * - `BaseSiteIntervention::TYPE_ELECTRICAL`
     * - `BaseSiteIntervention::TYPE_DISMANTLING`
     *
     * @var int
     */
    protected int $type;
}