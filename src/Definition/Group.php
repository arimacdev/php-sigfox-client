<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Actions;
/**
 * Defines the group's generic properties
 */
class Group
{
    /** SO */
    public const TYPE_SO = 0;
    /** Basic */
    public const TYPE_BASIC = 2;
    /** SVNO */
    public const TYPE_SVNO = 5;
    /** Partners */
    public const TYPE_PARTNERS = 6;
    /** NIP */
    public const TYPE_NIP = 7;
    /** DIST */
    public const TYPE_DIST = 8;
    /** Channel */
    public const TYPE_CHANNEL = 9;
    /** Starter */
    public const TYPE_STARTER = 10;
    /** Partner */
    public const TYPE_PARTNER = 11;
    /**
     * The group's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The group's description
     *
     * @var string
     */
    protected string $description;
    /**
     * Group's type
     * - `Group::TYPE_SO`
     * - `Group::TYPE_BASIC`
     * - `Group::TYPE_SVNO`
     * - `Group::TYPE_PARTNERS`
     * - `Group::TYPE_NIP`
     * - `Group::TYPE_DIST`
     * - `Group::TYPE_CHANNEL`
     * - `Group::TYPE_STARTER`
     * - `Group::TYPE_PARTNER`
     *
     * @var int
     */
    protected int $type;
    /**
     * The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     *
     * @var string
     */
    protected string $timezone;
    /**
     * The group's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The group's name to ascii and lowercase
     *
     * @var string
     */
    protected string $nameCI;
    /**
     * The group's path sorted by descending ancestor {id} (direct parent to farthest parent), restricted to the groups visible by the API user
     *
     * @var MinGroup[]
     */
    protected array $path;
    /**
     * The user id of the group's creator
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * The creation date of the group (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * true if the group is leaf
     *
     * @var bool
     */
    protected bool $leaf;
    /** @var Actions */
    protected Actions $actions;
}