<?php

namespace Arimac\Sigfox\Definition;

/**
 * Generic information for group update
 */
class CommonGroupUpdate
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
     * The group's name
     */
    protected string $name;
    /**
     * The group's description
     */
    protected string $description;
    /**
     * - Group's type
     * - `CommonGroupUpdate::TYPE_SO`
     * - `CommonGroupUpdate::TYPE_OTHER`
     * - `CommonGroupUpdate::TYPE_SVNO`
     * - `CommonGroupUpdate::TYPE_PARTNERS`
     * - `CommonGroupUpdate::TYPE_NIP`
     * - `CommonGroupUpdate::TYPE_DIST`
     * - `CommonGroupUpdate::TYPE_CHANNEL`
     * - `CommonGroupUpdate::TYPE_STARTER`
     * - `CommonGroupUpdate::TYPE_PARTNER`
     */
    protected int $type;
    /**
     * The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     */
    protected string $timezone;
}