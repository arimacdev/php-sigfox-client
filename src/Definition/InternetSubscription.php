<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinProvider;
use Arimac\Sigfox\Definition\MinContact;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Generic internet subscription information
 */
class InternetSubscription
{
    /** GSM */
    public const TYPE_GSM = 0;
    /** ADSL */
    public const TYPE_ADSL = 1;
    /** SATELLITE */
    public const TYPE_SATELLITE = 2;
    /** LAN */
    public const TYPE_LAN = 3;
    /** WIFI */
    public const TYPE_WIFI = 4;
    /** PRIMARY */
    public const PRIORITY_PRIMARY = 0;
    /** SECONDARY */
    public const PRIORITY_SECONDARY = 1;
    /** TERMINATED */
    public const PRIORITY_TERMINATED = 2;
    /**
     * The identifier of this internet subscription
     *
     * @var string
     */
    protected string $id;
    /**
     * Internet subscription type
     * - `InternetSubscription::TYPE_GSM`
     * - `InternetSubscription::TYPE_ADSL`
     * - `InternetSubscription::TYPE_SATELLITE`
     * - `InternetSubscription::TYPE_LAN`
     * - `InternetSubscription::TYPE_WIFI`
     *
     * @var int
     */
    protected int $type;
    /**
     * Internet subscription priority.
     * - `InternetSubscription::PRIORITY_PRIMARY`
     * - `InternetSubscription::PRIORITY_SECONDARY`
     * - `InternetSubscription::PRIORITY_TERMINATED`
     *
     * @var int
     */
    protected int $priority;
    /**
     * The comments about this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $comments;
    /**
     * The start time of this internet subscription
     *
     * @var int
     */
    protected int $startTime;
    /**
     * The end time this internet subscription. This field can be unset when updating.
     *
     * @var int
     */
    protected int $endTime;
    /** @var MinProvider */
    protected MinProvider $provider;
    /** @var MinContact[] */
    protected array $contacts;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}