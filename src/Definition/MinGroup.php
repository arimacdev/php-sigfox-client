<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines a group entity
 */
class MinGroup
{
    /** SO */
    public const TYPE_SO = 0;
    /** Other */
    public const TYPE_OTHER = 2;
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
     * The group identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The group name
     *
     * @var string
     */
    protected string $name;
    /**
     * Group's type
     * - `MinGroup::TYPE_SO`
     * - `MinGroup::TYPE_OTHER`
     * - `MinGroup::TYPE_SVNO`
     * - `MinGroup::TYPE_PARTNERS`
     * - `MinGroup::TYPE_NIP`
     * - `MinGroup::TYPE_DIST`
     * - `MinGroup::TYPE_CHANNEL`
     * - `MinGroup::TYPE_STARTER`
     * - `MinGroup::TYPE_PARTNER`
     *
     * @var int
     */
    protected int $type;
    /**
     * The depth level of the group in hierarchy
     *
     * @var int
     */
    protected int $level;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}