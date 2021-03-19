<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information about convention
 */
class BaseSiteConvention
{
    /** AT SIGFOX */
    public const STATUS_AT_SIGFOX = 0;
    /** AT HOST */
    public const STATUS_AT_HOST = 1;
    /** SIGNED SIGFOX */
    public const STATUS_SIGNED_SIGFOX = 2;
    /** SIGNED HOST */
    public const STATUS_SIGNED_HOST = 3;
    /** SIGNED BOTH */
    public const STATUS_SIGNED_BOTH = 4;
    /** CONDOMINIUM */
    public const TYPE_CONDOMINIUM = 0;
    /** INDIVIDUAL */
    public const TYPE_INDIVIDUAL = 1;
    /** SOCIAL HOUSING AUTHORITY */
    public const TYPE_SOCIAL_HOUSING_AUTHORITY = 2;
    /** ASSOCIATION */
    public const TYPE_ASSOCIATION = 3;
    /** COMPANY */
    public const TYPE_COMPANY = 4;
    /**
     * The annual cost of this convention
     *
     * @var int
     */
    protected int $annualCost;
    /**
     * The comments of this convention
     *
     * @var string
     */
    protected string $comments;
    /**
     * The start time of this convention
     *
     * @var int
     */
    protected int $startTime;
    /**
     * The end time of this convention
     *
     * @var int
     */
    protected int $endTime;
    /**
     * The bss contract reference of this convention
     *
     * @var string
     */
    protected string $contractReference;
    /**
     * is this convention in maintenance
     *
     * @var bool
     */
    protected bool $maintenance;
    /**
     * The annual cost of the maintenance of this convention
     *
     * @var int
     */
    protected int $maintenanceAnnualCost;
    /**
     * Convention status.
     * - `BaseSiteConvention::STATUS_AT_SIGFOX`
     * - `BaseSiteConvention::STATUS_AT_HOST`
     * - `BaseSiteConvention::STATUS_SIGNED_SIGFOX`
     * - `BaseSiteConvention::STATUS_SIGNED_HOST`
     * - `BaseSiteConvention::STATUS_SIGNED_BOTH`
     *
     * @var int
     */
    protected int $status;
    /**
     * Convention status.
     * - `BaseSiteConvention::TYPE_CONDOMINIUM`
     * - `BaseSiteConvention::TYPE_INDIVIDUAL`
     * - `BaseSiteConvention::TYPE_SOCIAL_HOUSING_AUTHORITY`
     * - `BaseSiteConvention::TYPE_ASSOCIATION`
     * - `BaseSiteConvention::TYPE_COMPANY`
     *
     * @var int
     */
    protected int $type;
}